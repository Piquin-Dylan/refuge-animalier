<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;

class HomeController
{

    public function index()
    {
        return view('client.home');
    }

    public function changeLang($langcode){
        App::setlocale($langcode);
        session()->put("lang_code",$langcode);
        return redirect()->back();
    }
}
