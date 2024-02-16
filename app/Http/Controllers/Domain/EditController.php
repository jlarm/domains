<?php

namespace App\Http\Controllers\Domain;

use App\Http\Controllers\Controller;
use App\Models\Domain;
use Request;

class EditController extends Controller
{
    public function __invoke(Domain $domain)
    {
        return view('domain.edit', [
            'domain' => $domain,
        ]);
    }
}
