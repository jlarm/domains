<?php

namespace App\Livewire\Domain;

use App\Livewire\Forms\DomainForm;
use App\Models\Domain;
use Livewire\Component;

class Create extends Component
{
    public DomainForm $form;

    public function create()
    {
        $this->validate();

        Domain::create([
            'name' => $this->name,
            'registrar' => $this->registrar,
            'registrar_url' => $this->registrar_url,
            'expiration' => $this->expiration,
            'status' => $this->status,
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.domain.create')->layout('layouts.app');
    }
}
