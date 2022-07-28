<?php

namespace App\Http\Livewire;

use App\Models\Tender;
use Livewire\Component;

class TenderWidget extends Component
{
    public $tenders; 
    public function render()
    {
        $this->tenders=Tender::all();
        
        return view('livewire.tender-widget');
    }
}
