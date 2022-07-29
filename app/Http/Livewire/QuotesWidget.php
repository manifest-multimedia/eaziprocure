<?php

namespace App\Http\Livewire;

use Livewire\Component;

class QuotesWidget extends Component
{
    public function render()
    {
        $quotes=[]; 
        return view('livewire.quotes-widget', compact('quotes'));
    }
}
