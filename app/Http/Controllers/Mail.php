<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mail extends Controller
{
    //
    public function index(){
        dd(env('MAIL_HOST'));
    }
}
