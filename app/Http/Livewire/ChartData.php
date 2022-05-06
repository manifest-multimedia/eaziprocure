<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ChartData extends Component
{
    public $january_revenue;

    public function mount(){
        $this->january_revenue='';
    }
    public function render()
    {
        return view('livewire.chart-data');
    }
}
