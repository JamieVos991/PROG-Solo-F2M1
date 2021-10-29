<?php

use Pecee\Http\Request;
use Pecee\SimpleRouter\Exceptions\NotFoundHttpException;
use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::setDefaultNamespace('Website\Controllers');

SimpleRouter::group(['prefix' => site_url()], function () {

	// START: Zet hier al eigen routes (alle URL's die je op je website hebt) en welke controller en functie deze pagina afhandelt
	// Lees de docs, daar zie je hoe je routes kunt maken: https://github.com/skipperbent/simple-php-router#routes

	SimpleRouter::get('/', 'WebsiteController@home')->name('home');

	// Registratie routes
	SimpleRouter::get('/registreren', 'RegistrationController@registrationForm')->name('register.form');
	SimpleRouter::post('/registreren/verwerken', 'RegistrationController@handleRegistrationForm')->name('register.handle');
	SimpleRouter::get('/registreren/bedankt', 'RegistrationController@registrationThankYou')->name('register.thankyou');
	SimpleRouter::get('/registreren/bevestigen/{code}', 'RegistrationController@confirmRegistration')->name('register.name');

	// Login routes
	SimpleRouter::get('/login', 'LoginController@LoginForm')->name('login.form');
	SimpleRouter::post('/login/verwerken', 'LoginController@handleLoginForm')->name('login.handle');
	SimpleRouter::get('/ingelogd/dashboard', 'LoginController@userDashboard')->name('login.dashboard');
	SimpleRouter::get('/logout', 'LoginController@logout')->name('logout');
	SimpleRouter::match(['get', 'post'], '/wachtwoord-vergeten', 'LoginController@passwordForgottenForm')->name('password.form');
	SimpleRouter::match(['get', 'post'], '/wachtwoord-reset/{reset_code}', 'LoginController@passwordResetForm')->name('password.reset');

	// Test routes
	SimpleRouter::get( '/stuur-test-email', 'EmailController@sendTestEmail' )->name( 'email.test' );
	SimpleRouter::get('/test-database', 'TestController@queriesTesten');

	SimpleRouter::get('/corona', 'CoronaController@index')->name('corona.index');
	SimpleRouter::get('/corona/{country}', 'CoronaController@countryDetails')
				->name('corona.details')
				->where(['country' => '[A-Za-z0-9\-]+']);




	// STOP: Tot hier al je eigen URL's zetten, dit stukje laat de 4040 pagina zien als een route/url niet kan worden gevonden.
	SimpleRouter::get('/not-found', function () {
		http_response_code(404);

		return '404 Page not Found';
	});
});


// Dit zorgt er voor dat bij een niet bestaande route, de 404 pagina wordt getoond (die hierboven als route staat ingesteld)
SimpleRouter::error(function (Request $request, \Exception $exception) {
	if ($exception instanceof NotFoundHttpException && $exception->getCode() === 404) {
		response()->redirect(site_url() . '/not-found');
	}
});
