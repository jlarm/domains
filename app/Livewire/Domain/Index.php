<?php

namespace App\Livewire\Domain;

use App\Models\Domain;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use Searchable, Sortable, WithPagination;

    public function render()
    {
        $query = Domain::query();

        $query = $this->applySearch($query);

        $query = $this->applySorting($query);

        $domains = $query->orderBy('expiration')->orderBy('name')->paginate(15);

        return view('livewire.domain.index', [
            'domains' => $domains,
        ]);
    }
}
