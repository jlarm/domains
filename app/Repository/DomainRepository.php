<?php

namespace App\Repository;

use App\Models\Domain;
use AshAllenDesign\FaviconFetcher\Facades\Favicon;

class DomainRepository
{
    public function create($data)
    {
        $favicon = Favicon::fetch($data['registrar_url'])->store('favicons');

        return Domain::create([
            'name' => $data['name'],
            'registrar' => $data['registrar'],
            'registrar_url' => $data['registrar_url'],
            'expiration' => $data['expiration'],
            'status' => $data['status'],
            'favicon' => $favicon,
        ]);
    }
}
