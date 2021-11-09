<?php

namespace Website\Controllers;

class ContactController {
    
    public function index(){

        $template_engine = get_template_engine();
        echo $template_engine->render('contact');

    }

}
