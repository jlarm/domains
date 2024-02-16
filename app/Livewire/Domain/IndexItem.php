<?php

namespace App\Livewire\Domain;

use App\Models\Domain;
use Livewire\Component;

class IndexItem extends Component
{
    public Domain $domain;

    public function render()
    {
        return view('livewire.domain.index-item');
    }
}
