<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Coba extends Controller
{
    //
    public function helloword() {
        return view('blog');
    }
}
