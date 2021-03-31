<?php

namespace App\Http\Livewire;

use App\Models\Nowplaying;
use Livewire\Component;

class Search extends Component
{
    public $searchTerm;

    public function render()
    {
        $searchTerm = '%' . $this->searchTerm . '%';
        return view('livewire.search', array(
            'nowplayings' => Nowplaying::where(function ($sub_query) {
                $sub_query->where('league', 'like', '%' . $this->searchTerm . '%')
                    ->orWhere('tournament', 'like', '%' . $this->searchTerm . '%');
            })->paginate(10)
        ));
    }
}
