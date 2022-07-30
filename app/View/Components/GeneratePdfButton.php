<?php

namespace App\View\Components;

use Illuminate\View\Component;


class GeneratePdfButton extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     public $items=[]; 
     public $organization; 
     public $customer; 

    public function __construct($items, $organization, $customer)
    {
        if(isset($items)){
            // dd($items);
            $this->items=$items; 
        }else{
            $this->items=[];
        }

        if(isset($organization))
        {$this->organization=$organization;}
        else{
            $this->organization="";
        }

        if(isset($customer)){

            $this->customer=$customer;
        } else{
            $this->customer="";
        }

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.generate-pdf-button');
    }
}
