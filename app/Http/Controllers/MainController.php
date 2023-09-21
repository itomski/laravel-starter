<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function hallo() {
        return 'Hallo vom Controller';
    }

    public function hi() {
        return 'Hi vom Controller';
    }

    public function doSomething() {
        return 'Controller macht etwas';
    }
}
