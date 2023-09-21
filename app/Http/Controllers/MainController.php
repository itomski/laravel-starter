<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// erzeugt mit: php artisan make:controller MainController

class MainController extends Controller
{
    public function index() {
        // Verweis auf die Views
        // 'standard' ist die Verwendung von resources/views/standard.blade.php
        // return view('standard');
        // 'layouts.standard' ist die Verwendung von resources/views/layouts/standard.blade.php
        //return view('layouts.standard', ['info' => 'Hallo Laravel']);
        // Alternativ

        $info = 'Hallo Laravel'; // Variablenname ist atomatisch der Key
        $title = 'Startseite'; // Variablenname ist atomatisch der Key
        return view('home', compact('info', 'title'));
        // Werte werden als assoziatives Array an die Views übergeben
        // Key ist der Name der Variable im Template

    }

    // Weitere Methoden
    /*
    public function hi() {
        return 'Hi vom Controller';
    }

    public function doSomething() {
        return 'Controller macht etwas';
    }
    */
}
