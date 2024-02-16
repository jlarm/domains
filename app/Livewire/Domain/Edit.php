<?php

namespace App\Livewire\Domain;

use App\Models\Domain;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Edit extends Component
{
    public Domain $domain;

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

    public function mount()
    {
        $this->name = $this->domain->name;
        $this->registrar = $this->domain->registrar;
        $this->registrar_url = $this->domain->registrar_url;
        $this->expiration = $this->domain->expiration?->format('Y-m-d');
        $this->status = $this->domain->status;
    }

    public function updateDomain()
    {
        $this->validate();

        $this->domain->update([
            'name' => $this->name,
            'registrar' => $this->registrar,
            'registrar_url' => $this->registrar_url,
            'expiration' => $this->expiration,
            'status' => $this->status,
        ]);
    }

    public function render()
    {
        return view('livewire.domain.edit')->layout('layouts.app');
    }
}
