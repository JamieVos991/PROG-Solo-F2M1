<?php

namespace Website\Controllers;

/**
 * Class WebsiteController

 */

class EmailController
{
	public function sendTestEmail(){

		$mailer = getSwiftMailer();

		$message = createEmailMessage('donald@trump.com', "Dit is een test email", "Jamie Vos", 'Jamievos100@gmail.com');
		$message->setBody('Dit is de inhoud van mijn test bericht!');

		$aantal_verstuurd = $mailer->send($message);
			
		echo "Aantal = " . $aantal_verstuurd;

	}
}
