<?php

namespace Website\Middleware;

use Pecee\Http\Middleware\IMiddleWare;
use Pecee\Http\Request;

class IsSuperAdmin implements IMiddleWare {

    public function handle(Request $request): void {


        // Authenticate user, will be available using request()->user
        $user = LoggedInUser();

        if($user === false) {
            redirect(url('login.form'));
            exit;
        }

        if($user['admin'] == 0){
            redirect(url('home'));
            exit;
        }

        $request->user = $user;

    }
}

