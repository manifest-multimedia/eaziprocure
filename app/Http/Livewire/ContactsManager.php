<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact; 

class ContactsManager extends Component
{

    public $user_id; 
    public $org_id; 
    public $contacts; 

    public function mount(){

    }

    public function render()
    {
        $this->contacts=Contact::where('user_id', $this->user_id)
        ->where('org_id', $this->org_id)->get(); 

        return view('livewire.contacts-manager');
    }
}
