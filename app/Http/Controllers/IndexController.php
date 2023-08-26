<?php

namespace App\Http\Controllers;

use Inertia\Inertia; 

class IndexController extends Controller 
{
    /**
     * Display a test template to test React wireup.
     */
    public function index()
    {
        return Inertia::render('Index');
    }
}