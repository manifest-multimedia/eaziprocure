<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\SmsSender;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;


class Sms extends Component
{

    public $message;
    public $message_type;
    public $campaign_type; 
    public $sender_name;
    public $sender_names;
    public $recipient; 
    public $recipients; 

    public $user_id;
    public $org_id;

    public function mount(){
        $this->message='';
        $this->user_id = Auth::user()->id;
        $this->org_id;
        $this->recipient="233549539417";
        
    }
    public function render()
    {
        $this->sender_names=SmsSender::where('user_id', $this->user_id)
        ->where('org_id', $this->org_id)->get();

        $this->recipients=Contact::where('user_id', $this->user_id)
        ->where('org_id', $this->org_id)->get();
        return view('livewire.sms');
    }




    public function sendMessage(){

        $this->sender_name="ManifestGH";
        $send=sendSMS($this->sender_name, $this->message, $this->recipient);
        dd($send);
    }


}
