<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Qrcontroller extends Controller
{
    function generate()
    {
        return view('qrcode');
    }
}
