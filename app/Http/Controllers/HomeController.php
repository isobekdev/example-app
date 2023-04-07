<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show() {
        $skills = ['html', 'css', 'php', 'bootstrap', 'java'];
        $name = 'Isobek';
        $res = [
            'name' => $name,
            'skills' => $skills,
        ];
        return view('hello', $res);
    }
}
