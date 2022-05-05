<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\OrgProfiles; 
use Auth; 

class MarketPlaceWidget extends Component
{
    public $org_count; 
    public $orgnizations; 

    public function mount(){
        $this->org_count=OrgProfiles::all()->count();
    }
    public function render()
    {
        $this->organizations=OrgProfiles::where('status', 'verified')->get(); 
        return view('livewire.market-place-widget');
    }
}
