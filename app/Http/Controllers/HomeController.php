<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show() {
        $user = [
            1,2,3,4
        ];

        return count($user);
    }
}
