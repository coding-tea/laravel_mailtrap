<?php

namespace App\Http\Controllers;

use App\Mail\mailubale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class mailController extends Controller
{
    public function send(){
        Mail::to('email@gmail.com')->send(new mailubale());
        return 'mail sent successfuly';
    }
}
