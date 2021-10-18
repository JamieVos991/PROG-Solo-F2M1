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
class LoginController
{

	public function loginForm()
	{

		$template_engine = get_template_engine();
		echo $template_engine->render('login_form');
	}


	public function handleLoginForm()
	{

		// Form valideren: email en wachtwoord ingevuld?
		$result = validateRegistrationData($_POST);

		// Checken: bestaat gebruiker met dat email wel?
		if (userNotRegistered($result['data']['email'])) {
			$result['errors']['email'] = 'Deze gebruiker is niet bekend';
		} else {

			// Controleren wachtwoord klopt (password_verify)
			$user = getUserByEmail($result['data']['email']);

			if (password_verify($result['data']['wachtwoord'], $user['wachtwoord'])) {

				// Gebruiker inloggen
				loginUser($user);

				// Gebruiker doorsturen naar eigen dashboard (alleen ingelogde gebruikers)
				redirect(url('login.dashboard'));
			} else {
				$result['errors']['wachtwoord'] = 'Wachtwoord is niet correct';
			}
		}

		// Anders foutmeldingen tonen in het inlogformulier 

		$template_engine = get_template_engine();
		echo $template_engine->render('login_form', ['errors' => $result['errors']]);
	}

	public function userDashboard()
	{

		// Checken of je wel echt bent ingelogd
		loginCheck();

		$template_engine = get_template_engine();
		echo $template_engine->render('user_dashboard');
	}

	public function logout() {
		logoutUser();
		redirect(url('home'));
	}
}
