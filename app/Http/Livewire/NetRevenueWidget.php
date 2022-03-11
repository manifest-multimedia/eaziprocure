<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NetRevenueWidget extends Component
{
    public $net_revenue; 

    public function mount(){
        $this->net_revenue=0; 
    }
    public function render()
    {
        return view('livewire.net-revenue-widget');
    }
}
