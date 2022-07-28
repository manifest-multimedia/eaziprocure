<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\Service;
use Livewire\Component;

class ShoppingAreaWidget extends Component
{
    public $products; 
    public $services; 


    public function render()
    {
        
        $this->products=Product::all();

        $this->services=Service::all();

        return view('livewire.shopping-area-widget');
    }
}
