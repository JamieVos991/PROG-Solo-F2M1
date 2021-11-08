<?php

namespace Website\Controllers;

class SecureController {
    
    public function index(){

        $template_engine = get_template_engine();
        echo $template_engine->render('secure');

    }

}
