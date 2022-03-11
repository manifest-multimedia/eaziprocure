<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Invoice extends Component
{
    public $business_email; 
    public $business_contact; 
    
    public $invoice_number; 
    public $invoice_date; 
    public $invoice_items=[]; 
    public $note; 
    public $total;
    public $summary; 
    public $taxes;  
    
    public $from_company; 
    public $from_address_line_1; 
    public $from_address_line_2;
    public $from_contact;  

    public $to_company; 
    public $to_address_line_1; 
    public $to_address_line_2; 
    public $to_contact; 

    public function mount(){
    
        $this->business_email='business@mail.com';
        $this->business_contact='000-business'; 
        // $this->note='In exceptional circumstances, Financial Services can provide an urgent manually processed special cheque. Note, however, that urgent special cheques should be requested only on an emergency basis as manually produced cheques involve duplication of effort and considerable staff resources. Requests need to be supported by a letter explaining the circumstances to justify the special cheque payment.';
        $this->note='Note'; 
        $this->total='0';
        $this->summary; 
        $this->taxes; 
    }

    public function render()
    {

        return view('livewire.invoice');
    }
}
