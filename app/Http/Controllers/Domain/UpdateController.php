<?php

namespace App\Http\Controllers\Domain;

use App\Http\Controllers\Controller;
use App\Http\Requests\DomainRequest;
use App\Models\Domain;
use App\Repository\DomainRepository;

class UpdateController extends Controller
{
    public function __invoke(DomainRequest $request, DomainRepository $repository, Domain $domain)
    {
        $repository->update($domain->id, $request->validated());

        return redirect()->route('dashboard');
    }
}
