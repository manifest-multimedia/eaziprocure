<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\SmsSender;
use Illuminate\Support\Facades\Auth;
class Sms extends Component
{

    public $message;
    public $sender_name;
    public $user_id;
    public $org_id;

    public function mount(){
        $this->user_id = Auth::user()->id;
        $this->org_id;
    }
    public function render()
    {
        $this->sender_name=SmsSender::where('user_id', $this->user_id)
        ->where('org_id', $this->org_id)->get();

        return view('livewire.sms');
    }
}
