<?php

namespace App\Http\Controllers\Domain;

use App\Http\Controllers\Controller;
use App\Http\Requests\DomainRequest;
use App\Repository\DomainRepository;

class CreateController extends Controller
{
    public function __invoke(DomainRequest $request, DomainRepository $repository)
    {
        $repository->create($request->validated());

        return redirect()->route('dashboard');
    }
}
