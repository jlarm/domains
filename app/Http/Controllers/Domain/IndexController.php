<?php

namespace App\Http\Controllers\Domain;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('dashboard');
    }
}
