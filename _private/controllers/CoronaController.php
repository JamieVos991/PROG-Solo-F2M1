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
class CoronaController
{
	public function index()
	{

		$url = 'https://api.covid19api.com/countries'; 

		// HTTP Client aanmaken 
		$client = new \GuzzleHttp\Client();

		// Request doen
		$response = $client->request('GET', $url);
		$json = $response->getBody();

		// JSON omzetten in een array met json_decode()
		$countries = json_decode($json, true);

		$template_engine = get_template_engine();
		echo $template_engine->render('corona_index', ['countries' => $countries] );
		
	}
}
