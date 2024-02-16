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

        $this->applySearch($query);

        $this->applySorting($query);

        $domains = $query->paginate(15);

        return view('livewire.domain.index', [
            'domains' => $domains,
        ]);
    }
}
