<?php

namespace App\Livewire\Domain;

use App\Models\Domain;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search = '';

    public function placeholder()
    {
        return <<<'HTML'
        <div>
            <svg class="animate-spin mx-auto h-16 w-16 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
              <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
              <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
        </div>
        HTML;
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }

    protected function applySearch($query)
    {
        $this->search === ''
            ? $query
            : $query
                ->where('name', 'like', '%'.$this->search.'%')
                ->orWhere('registrar', 'like', '%'.$this->search.'%');
    }

    public function render()
    {
        $query = Domain::orderBy('expiration')->orderBy('name');

        $this->applySearch($query);

        return view('livewire.domain.index', [
            'domains' => $query->paginate(15),
        ]);
    }
}
