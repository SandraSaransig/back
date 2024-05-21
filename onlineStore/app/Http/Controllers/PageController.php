<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class PageController extends Controller
{
    //Para la pagina acerca de
    public function about(){
        return inertia::render('About');
    }
}
