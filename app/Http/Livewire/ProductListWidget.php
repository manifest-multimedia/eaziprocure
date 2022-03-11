<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User; 
use App\Models\Product; 
use App\Models\ProductCategory; 
use Auth;
class ProductListWidget extends Component
{
    public $product_categories;
    public $products; 
    public $user_id; 
    
    public function render()
    {
        $this->product_categories=ProductCategory::all();
        return view('livewire.product-list-widget');
    }
}
