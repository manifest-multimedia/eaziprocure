<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use Livewire\WithFileUploads;

class ProductModal extends Component
{
    use WithFileUploads;

    public $product_name;
    public $product_category;
    public $product_description;
    public $product_cost;
    public $product_price;
    public $product_stock;

    public $product_image;

    public $user_id;
    public $org_id;

    public function mount() {

        $this->user_id = Auth::user()->user_id;

    }



    public function render()
    {
        return view('livewire.product-modal');
    }


    public function save(){


        $validate=$this->validate([

            'product_name' =>'required', 
            'product_category' =>'required',
            'product_description' =>'required',
            'product_cost' =>'required',
            'product_price' =>'required',
            'product_stock'=>'required',
            'product_image' =>'required|max:1024',

        ], [
                'product_name.required' => 'Please specify a name for your product', 
                'product_category.required' => 'What is the product category?', 
                'product_description.required' => 'Kindly provide a product description', 
                'product_cost.required' => 'Cost is required for accounting purposes', 
                'product_price.required' => 'You have not provided a selling price for the product', 
                'product_stock.required' => 'Please specify the available stock quantity for your product', 
                'product_image.required' => 'You have not uploaded a product image', 

        ]);

        //Save
        $store_image=$this->product_image->store('product_images');

        $add_new_product=new Product; 
        $add_new_product->name=$this->product_name;
        $add_new_product->description=$this->product_description;
        $add_new_product->category_id=$this->product_category;
        $add_new_product->image=$store_image;
        $add_new_product->cost=$this->product_cost;
        $add_new_product->price=$this->product_price;
        $add_new_product->stock=$this->product_stock;
        $add_new_product->status='available';

        $add_new_product->owner=$this->user_id;
        $add_new_product->org_id=$this->org_id;
        
        $add_new_product->save();


    }


}
