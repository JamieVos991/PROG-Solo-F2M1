<?php

namespace Website\Controllers;

/**
 * Class WebsiteController
 *
 * Deze handelt de logica van de homepage af
 * Haalt gegevens uit de "model" laag van de website (de gegevens)
 * Geeft de gegevens aan de "view" laag (HTML template) om weer te geven
 *
 */
class RegistrationController {

	public function registrationForm(){
		
		$template_engine = get_template_engine();
		echo $template_engine->render('register/register_form');
	}

	public function handleRegistrationForm(){	
		// Hier wordt zo het form afgehandeld
		
		$errors = [];

		$result = validateRegistrationData($_POST);

		if ( count( $result['errors'] ) === 0){
			//Opslaan van de gebruiker
		
			if (userNotRegistered ($result['data']['email'])) {

				//Vertificatie code
				$code = md5( uniqid( rand(), true ) );

				createUser($result['data']['email'], $result['data']['wachtwoord'], $code);
				
				// Mail versturen met verificatie link + code
				//sendConfirmationEmail($result['data']['email'], $code);

				// Doorsturen naar de bedankt pagina
				$bedanktUrl = url('register/register.thankyou');
				redirect($bedanktUrl);

				// Alles hierna wordt niet meer uitgevoerd


			}	else {
				// Anders foutmelding tonen
				$errors['email'] = 'Dit account bestaat al';
			}

		}

		$template_engine = get_template_engine();
		echo $template_engine->render( 'register/register_form', ['errors' => $errors]);

	}

	public function registrationThankYou(){
		$template_engine = get_template_engine();
		echo $template_engine->render("register/register_thankyou");
	}

	public function confirmRegistration($code){
		
		// Hier moeten we de code gaan lezen

		// Gebruiler ophalen bij die code
		$user = getUserByCode($code);
		if ($user === false){
			echo "Onbekende gebruiker of al bevestigd?";
			exit;
		}

		// Gebruiker activeren: code leegmaken in de database table
		confirmAccount($code);

		// Doorsturen naar de login pagina
		$template_engine = get_template_engine();
		echo $template_engine->render("register_confirmed");

	}
}
