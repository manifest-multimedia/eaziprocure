<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TotalExpenseWidget extends Component
{

    public $totalexpense; 

    public function mount(){
        $this->totalexpense=0;
    }

    public function render()
    {
        return view('livewire.total-expense-widget');
    }
}
