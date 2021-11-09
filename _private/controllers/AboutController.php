<?php

namespace Website\Controllers;

class AboutController {
    
    public function index(){

        $template_engine = get_template_engine();
        echo $template_engine->render('about');

    }

}
