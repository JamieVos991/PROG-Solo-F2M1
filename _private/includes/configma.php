<?php
// Kopieer dit bestand naar config.php met je eigen gegevens
// config.php wordt niet naar Github gestuurd, wel zo veilig.
// Zet dus NOOIT in dit bestand je geheime gegevens, deze dient alleen als voorbeeld

$config = [
	'DB'       => [
		'HOSTNAME' => '127.0.0.1',
		'DATABASE' => 'bap_covid19',
		'USER'     => 'root',
		'PASSWORD' => '',
	],

	'MAIL' => [
		'SMTP_HOST' => 'smtp.mailtrap.io',
		'SMTP_PORT' => '465',
		'SMTP_USER' => '5f8c0f6a48874e',
		'SMTP_PASSWORD' => '2a698467d3ef65',
	],

	'BASE_URL' => '/covid19/',  // Zet hier het pad naar de public map in, vanaf http://localhost, anders werken je routes niet!
	'BASE_HOST' => 'http://31694.hosts1.ma-cloud.nl',
	'ROOT' => dirname(dirname(__DIR__)),
	'PRIVATE'  => dirname(__DIR__),
	'PUBLIC' => dirname( __DIR__, 2 ),
	'WEBROOT' => dirname(dirname(__DIR__)) . ''


];

return $config;
