<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NewSenderNameModal extends Component
{
    public $user_id;
    public $org_id;
    public $sender_name;

    public function mount(){

    }

    public function render()
    {
        return view('livewire.new-sender-name-modal');
    }

    public function save(){
        $this->validate([
            'sender_name'=>'required|max:11',
        ], [
            'sender_name.required'=>'Please provide a valid sender name.'
        ]);
    }
}
