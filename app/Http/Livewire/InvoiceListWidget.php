<?php

namespace App\Http\Livewire;

use Livewire\Component;

class InvoiceListWidget extends Component
{

    public $invoices=[];

    public function mount(){
        
    }

    public function render()
    {
        return view('livewire.invoice-list-widget');
    }
}
