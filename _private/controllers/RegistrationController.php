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
		echo $template_engine->render('register_form');
	}

	public function handleRegistrationForm(){
		// Hier wordt zo het form afgehandeld
		
		$result = validateRegistrationData($_POST);

		if (count ($result['errors']) === 0){
			//Opslaan van de gebruiker
		
			if ( userNotRegistered ($result['data']['email'])){

				createUser($result['data']['email'], $result['data']['wachtwoord']);
				
				// Doorsturen naar de bedankt pagina
				$bedanktUrl = url('register.thankyou');
				redirect($bedanktUrl);

				// Alles hierna wordt niet meer uitgevoerd


			}	else {
				// Anders foutmelding tonen
				$errors['email'] = 'Dit account bestaat al';
			}

		}

		$template_engine = get_template_engine();
		echo $template_engine->render('register_form', ['errors' => $errors]);

	}

	public function registrationThankYou(){
		$template_engine = get_template_engine();
		echo $template_engine->render("register_thankyou");
	}
}
