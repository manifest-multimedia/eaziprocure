<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\Service;
use Livewire\Component;

class ShoppingAreaWidget extends Component
{
  

    public function render()
    {
        
        $products=Product::where('status', 1)->get();

        $services=Service::where('status', 1)->get();

        return view('livewire.shopping-area-widget', compact('products', 'services'));
    }
}
