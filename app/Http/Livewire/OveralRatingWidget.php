<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OveralRatingWidget extends Component
{

    public $rating; 

    public function mount(){

        $this->rating=5; 

    
    }

    public function render()
    {
        return view('livewire.overal-rating-widget');
    }
}
