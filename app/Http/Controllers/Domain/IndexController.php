<?php

namespace App\Http\Controllers\Domain;

use App\Http\Controllers\Controller;
use App\Models\Domain;

class IndexController extends Controller
{
    public function __invoke()
    {
        $domains = Domain::query()
            ->orderBy('expiration')
            ->orderBy('name')
            ->get();

        return view('dashboard', compact('domains'));
    }
}
