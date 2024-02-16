<?php

namespace App\Repository;

use App\Models\Domain;
use AshAllenDesign\FaviconFetcher\Facades\Favicon;

class DomainRepository
{
    public function create($data)
    {
        return Domain::create([
            'name' => $data['name'],
            'registrar' => $data['registrar'],
            'registrar_url' => $data['registrar_url'],
            'expiration' => $data['expiration'],
            'status' => $data['status'],
        ]);
    }

    public function update($id, $data)
    {
        $domain = Domain::find($id);

        return $domain->update([
            'name' => $data['name'],
            'registrar' => $data['registrar'],
            'registrar_url' => $data['registrar_url'],
            'expiration' => $data['expiration'],
            'status' => $data['status'],
        ]);
    }
}
