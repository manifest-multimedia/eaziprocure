<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Auth;
use App\Models\User; 
use Livewire\WithFileUploads;


class AccountSetup extends Component


{
    use WithFileUploads;

    public $user=[]; 
    public $role; 
    public $organizations=[];
    public $logo='images/avatars/thumb-3.jpg'; 
    public $socials; 
    public $facebook; 
    public $facebookUpdated; 
    public $instagram;
    public $instagramUpdated; 
    public $twitter; 
    public $twitterUpdated; 
    public $dribbble; 
    public $dribbbleUpdated; 
    public $github; 
    public $githubUpdated; 
    public $linkedin; 
    public $linkedinUpdated; 

    public function mount(){
        
        $this->user=Auth::user(); 
        $this->role='administrator'; 
    }

    public function render()
    {

        $this->organizations=User::find(1)->organizations;
        $this->user=User::find(1); 
        $this->socials=User::find(1)->socials; 

        if(!is_null($this->socials)) {
            
            foreach ($this->socials as $item) {
               
                switch (strtolower($item->platform)) {
                    case 'facebook':
                        
                        if(is_null($this->facebookUpdated)) {   
                            $this->facebook=$item->username;
                             
                        }
                        
                    case 'instagram': 

                        if (is_null($this->instagramUpdated)) {
                            $this->instagram=$item->username; 
                        }

                    case 'twitter':
                        if (is_null($this->twitterUpdated)){
                            $this->instagram=$item->username; 
                        }

                    case 'dribbble':
                        if(is_null($this->dribbbleUpdated)){
                            $this->dribbble=$item->username; 
                        }  
                        
                    case 'github':
                        if(is_null($this->githubUpdated)){
                            $this->github=$item->username; 
                        }    

                    case 'linkedin':
                        if(is_null($this->linkedinUpdated)){
                            $this->linkedin=$item->username;
                        }    

                        break;
                    
                    default:
                        
                        // print 'Unsupported Platform'; 

                        break;
                }
            }
        }

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

    public function updatedLogo(){

        $this->logo = $this->logo->temporaryUrl();

    }
    public function updatedFacebookUpdated(){
        
       $this->facebook=$this->facebookUpdated; 

    }
    public function updatedInstagramUpdated(){
        
        $this->instagram=$this->instagramUpdated; 
 
     }
     public function updatedTwitterUpdated(){
        
        $this->twitter=$this->twitterUpdated; 
 
    }
    public function updatedDribbbleUpdated(){
        
        $this->dribbble=$this->dribbbleUpdated; 
 
    }
    public function updatedGithubUpdated(){
        
        $this->github=$this->githubUpdated; 
 
    }

    

}
