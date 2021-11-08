<?php

namespace Website\Controllers;

class AdminController {
    
    public function index(){

        $template_engine = get_template_engine();
        echo $template_engine->render('admin');

    }

}
