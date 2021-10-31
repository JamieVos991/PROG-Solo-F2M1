<?php
// Dit bestand hoort bij de router, en bevat nog een aantal extra functies je kunt gebruiken
// Lees meer: https://github.com/skipperbent/simple-php-router#helper-functions
require_once __DIR__ . '/route_helpers.php';

// Hieronder kun je al je eigen functies toevoegen die je nodig hebt
// Maar... alle functies die gegevens ophalen uit de database horen in het Model PHP bestand

/**
 * Verbinding maken met de database
 * @return \PDO
 */
function dbConnect()
{

	$config = get_config('DB');

	try {
		$dsn = 'mysql:host=' . $config['HOSTNAME'] . ';dbname=' . $config['DATABASE'] . ';charset=utf8';

		$connection = new PDO($dsn, $config['USER'], $config['PASSWORD']);
		$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

		return $connection;
	} catch (\PDOException $e) {
		echo 'Fout bij maken van database verbinding: ' . $e->getMessage();
		exit;
	}
}

/**
 * Geeft de juiste URL terug: relatief aan de website root url
 * Bijvoorbeeld voor de homepage: echo url('/');
 *
 * @param $path
 *
 * @return string
 */
function site_url($path = '')
{
	return get_config('BASE_URL') . $path;
}

function absolute_url($path = '')
{
	return get_config('BASE_HOST') . $path;
}

function get_config($name)
{
	$config = require __DIR__ . '/config.php';
	$name   = strtoupper($name);

	if (isset($config[$name])) {
		return $config[$name];
	}

	throw new \InvalidArgumentException('Er bestaat geen instelling met de key: ' . $name);
}

/**
 * Hier maken we de template engine en vertellen de template engine waar de templates/views staan
 * @return \League\Plates\Engine
 */
function get_template_engine()
{

	$templates_path = get_config('PRIVATE') . '/views';

	$template_engine = new League\Plates\Engine($templates_path);
	$template_engine->addFolder('layouts', $templates_path . '/layouts');

	return $template_engine;
}

/**
 * Geef de naam (name) van de route aan deze functie, en de functie geeft
 * terug of dat de route is waar je nu bent
 *
 * @param $name
 *
 * @return bool
 */
function current_route_is($name)
{
	$route = request()->getLoadedRoute();

	if ($route) {
		return $route->hasName($name);
	}

	return false;
}


function validateRegistrationData($data)
{

	$errors = [];

	// Checks: valideren of email echt een geldig email is
	$email = filter_var($data['email'], FILTER_VALIDATE_EMAIL);
	$wachtwoord = trim($data['wachtwoord']);

	if ($email === false) {
		$errors['email'] = 'Geen geldig email ingevuld';
	}

	// Checks: wachtwoord minimaal 6 tekens bevat
	if (strlen($wachtwoord) < 6) {
		$errors['wachtwoord'] = 'Geen geldig wachtwoord (minimaal 6 tekens)';
	}

	// Resultaat array
	$data = [
		'email' => $data['email'],
		'wachtwoord' => $wachtwoord
	];

	return [
		'data' => $data,
		'errors' => $errors
	];
}


function userNotRegistered($email)
{

	//Checken of de gebruiker al bestaat
	$connection = dbConnect();
	$sql = "SELECT * FROM `gebruikers` WHERE `email` = :email";
	$statement = $connection->prepare($sql);
	$statement->execute(['email' => $email]);

	return ($statement->rowCount() === 0);
}



function createUser($email, $wachtwoord, $code){

	$connection = dbConnect();

	$sql = "INSERT INTO `gebruikers` (`email`, `wachtwoord`, `code`) VALUES (:email, :wachtwoord, :code)";
	$statement = $connection->prepare($sql);
	$safe_password = password_hash($wachtwoord, PASSWORD_DEFAULT);
	$params = [
		'email' => $email,
		'wachtwoord' => $safe_password,
		'code' => $code
	];
	$statement->execute( $params );
}

function loginUser($user)
{
	$_SESSION['user_id'] = $user['id'];
}

function logoutUser()
{
	unset($_SESSION['user_id']);
}

function isLoggedIn()
{
	return !empty($_SESSION['user_id']);
}

function loginCheck()
{
	if (!isLoggedIn()) {
		$login_url = url('login.form');
		redirect($login_url);
	}
}

function getLoggedInUserEmail()
{

	$email = "NIET INGELOGD";

	if (!isLoggedIn()) {
		return $email;
	}

	$user_id = $_SESSION['user_id'];
	$user = getUserById($user_id);

	if ($user) {
		$email = $user['email'];
	}

	return $email;
}

function getSwiftMailer()
{
	$mail_config = get_config('MAIL');
	$transport   = new \Swift_SmtpTransport($mail_config['SMTP_HOST'], $mail_config['SMTP_PORT']);
	$transport->setUsername($mail_config['SMTP_USER']);
	$transport->setPassword($mail_config['SMTP_PASSWORD']);

	$mailer = new \Swift_Mailer($transport);

	return $mailer;
}

function createEmailMessage($to, $subject, $from_name, $from_email)
{

	// Create a message
	$message = new \Swift_Message($subject);
	$message->setFrom([$from_email => $from_email]);
	$message->setTo($to);

	// Send the message
	return $message;
}

function embedImage($message, $filename)
{
	$image_path = get_config('WEBROOT') . '/images/email/' . $filename;
	if (!file_exists($image_path)) {
		throw new \RuntimeException('Afbeelding bestaat niet: ' . $image_path);
	}

	$cid = $message->embed(\Swift_Image::fromPath($image_path));

	return $cid;
}

function confirmAccount($code){

	$connection = dbConnect();
	$sql = "UPDATE `gebruikers` SET `code` = NULL WHERE `code` = :code";
	$statement = $connection->prepare($sql);
	$params = [
		'code' => $code
	];
	$statement->execute($params);
}

function loggedInUser(){

	if(!isLoggedIn()){
		return false;
	}

	return getUserById($_SESSION['user_id']);
}

function sendPasswordResetEmail($email)
{
 	// Code genereren en opslaan bij dit email adres (gebruiker)
 	$reset_code = md5(uniqid(rand(), true)); 
 	$connection = dbConnect();
 	$sql = "UPDATE `gebruikers` SET `password_reset` = :code WHERE `email` = :email";
 	$statement = $connection->prepare($sql);
	$params = [
		'code' => $reset_code,
		'email' => $email
	];

 	$statement->execute($params);

 	// Link genereren met die code
	 $url = url('password.reset', ['reset_code' => $reset_code]);
	 $absolute_url = absolute_url($url);

 	// Mail opstellen en versturen
	 $mailer = getSwiftMailer();
	 $message = createEmailMessage($email, 'Bevestig je account', 'Buurtboodschappen website', 'Jamievos100@gmail.com');

	 $email_text = 'Hoi, klik hier om je wachtwoord te resetten: <a href="' . $absolute_url . '">Wachtwoord resetten</a>';

	 $message->setBody($email_text, 'text/html');
	 $mailer->send($message);
}
