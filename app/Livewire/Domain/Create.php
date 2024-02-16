<?php

namespace App\Livewire\Domain;

use App\Models\Domain;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{
    #[Validate('required', 'unique:domains', 'max:255', 'string')]
    public $name;

    #[Validate('required', 'max:255', 'string')]
    public $registrar;

    #[Validate('required', 'url')]
    public $registrar_url;

    #[Validate('required', 'date')]
    public $expiration;

    #[Validate('required', 'boolean')]
    public $status = 1;

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
