<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Auth;

class AccountSetup extends Component


{
    public $user=[]; 

    public function mount(){
        
        $this->user=Auth::user(); 

    }

    public function render()
    {
        return view('livewire.account-setup');
    }
}
