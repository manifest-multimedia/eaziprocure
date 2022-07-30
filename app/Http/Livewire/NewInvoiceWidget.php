<?php

namespace App\Http\Livewire;

use Livewire\Component;
use GuzzleHttp\Client;


class NewInvoiceWidget extends Component
{


    public $invoiceItems=[];
    public $key; 
    public $org_id; 
    public $customer;

    public $invoice_id;

    public function mount(){

        $this->org_id=1; 
        $this->customer=1;

        $this->key=1; 

        $this->invoiceItems[]=[
            'key'=>$this->key,
            'item_name'=>"", 
            'item_description'=>"", 
            'item_quantity'=>'1', 
            'item_price'=>"", 
        ];

    }

    public function render()
    {
        return view('livewire.new-invoice-widget');
    }


    public function addItem(){
        
        $this->key = $this->key + 1;
        $this->invoiceItems[]=[
            'key'=>$this->key,
            'item_name'=>"", 
            'item_description'=>"", 
            'item_quantity'=>'1', 
            'item_price'=>"", 

        ];

    }

    public function removeItem($item){
        unset($this->invoiceItems[$item]);
        $this->invoiceItems=array_values($this->invoiceItems);
    }

    public function save(){

        foreach ($this->invoiceItems as $item) {
            info(' Item Name | '.$item['item_name']); 
            info(' Item Description | '.$item['item_description']); 
            info(' Item Quantity | '.$item['item_quantity']); 
            info(' Item Price | '.$item['item_price']); 
            # code...
        }

    }

    public function preview(){

        //Redirect to Invoice Preview Endpoint
        redirect("/invoice/preview/$this->invoice_id");
      
    }
    public function download(){

        //Redirect to Invoice download Endpoint
        redirect("/invoice/download/$this->invoice_id");
      
    }

}
