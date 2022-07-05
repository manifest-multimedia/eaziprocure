<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;

class NewContactModal extends Component
{

    public $user_id;
    public $org_id;

    public $first_name;
    public $last_name;
    public $other_names;
    public $mobile; 
    public $occupation;
    public $date_of_birth;

    public function mount(){

    }

    public function render()
    {
        return view('livewire.new-contact-modal');
    }

    public function save(){

        $this->validate([
            'first_name'=>'required',
            'mobile'=>'required',     
        ], 
    [
        'first_name.required' => 'First Name is required',  
        'mobile.required'=>'Mobile is required',

    ]);

        $store=new Contact;
        $store->first_name=$this->first_name;
        $store->last_name=$this->last_name;
        $store->other_name=$this->other_names;
        $store->date_of_birth=$this->date_of_birth;
        $store->mobile_number=$this->mobile; 
        $store->occupation=$this->occupation;
        $store->save();

        $this->resetValues();

    }

    public function resetValues(){
        $this->first_name='';
        $this->last_name='';
        $this->other_names='';
        $this->date_of_birth='';
        $this->mobile='';
        $this->occupation='';
    }
}
