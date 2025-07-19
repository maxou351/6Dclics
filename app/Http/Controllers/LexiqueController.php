<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LexiqueController extends Controller
{


    public function index()
    {
        $json = File::get(resource_path('data/lexique.json'));
        $lexique = json_decode($json, true);

        return view('lexique.index', ['lexique' => $lexique]);
    }

    public function api()
    {
        $json = File::get(resource_path('data/lexique.json'));
        return response($json, 200)->header('Content-Type', 'application/json');
    }

}
