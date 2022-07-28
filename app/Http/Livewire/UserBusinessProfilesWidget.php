<?php

namespace App\Http\Livewire;

use App\Models\UserOrganizations;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserBusinessProfilesWidget extends Component
{
    // private $profiles; 
    public $user_id;

    public function mount(){
        
        $user_id=Auth::user()->id;
        if(!is_null($user_id)){

            $this->user_id=$user_id;
        }

    }

    public function render()
    {
        
            $profiles=UserOrganizations::where('user_id', $this->user_id)->get();
        
        return view('livewire.user-business-profiles-widget', compact('profiles'));
    }
}
