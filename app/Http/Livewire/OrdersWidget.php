<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OrdersWidget extends Component
{
    public $orders; 

    public function mount(){
        $this->orders='0';
    }

    public function render()
    {
        return view('livewire.orders-widget');
    }
}
