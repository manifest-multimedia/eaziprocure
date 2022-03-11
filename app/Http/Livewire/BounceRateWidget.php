<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BounceRateWidget extends Component
{
    public $bounce_rate; 

    public function mount(){
        $this->bounce_rate=0; 
    }
    public function render()
    {
        return view('livewire.bounce-rate-widget');
    }
}
