<?php

namespace Website\Controllers;

use League\Plates\Template\Template;

class SecureController {
    
    public function index(){
        loginCheck();

        $template_engine = get_template_engine();
        echo $template_engine->render('secure/index');

    }
}