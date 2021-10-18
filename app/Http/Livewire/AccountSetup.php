<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Auth;

class AccountSetup extends Component


{
    public $user=[]; 
    public $role; 

    public function mount(){
        
        $this->user=Auth::user(); 
        $this->role='administrator'; 
    }

    public function render()
    {
        return view('livewire.account-setup');
    }


    public function updatedRole(){

        switch ($this->role) {
            case 'administrator':
                return 'Howdy!'; 
                break;

            default:
                # code...
                break;
        }
    }

}
