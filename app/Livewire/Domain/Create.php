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

        Domain::create($this->form->all());

        $this->form->reset();
    }

    public function render()
    {
        return view('livewire.domain.create')->layout('layouts.app');
    }
}
