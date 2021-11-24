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


        $this->socials=User::find($this->user->id)->socials; 

        if(!is_null($this->socials)) {
            
            foreach ($this->socials as $item) {
               
                switch (strtolower($item->platform)) {
                    case 'facebook':      
                       if (strtolower($item->platform)==='facebook') {
                           $this->facebookUpdated=$item->username;   
                           $this->facebook=$this->facebookUpdated;                          
                        } 
                    case 'instagram':
                        if ($item->platform==="instagram") {
                            $this->instagramUpdated=$item->username; 
                            $this->instagram=$this->instagramUpdated;
                        }
                    case 'twitter':
                       if ($item->platform==='twitter') {
                           $this->twitterUpdated=$item->username;
                           $this->twitter=$this->twitterUpdated; 
                       }

                    case 'dribbble':
                        if ($item->platform==='dribbble') {
                            $this->dribbbleUpdated=$item->username;  
                            $this->dribbble=$this->dribbbleUpdated; 
                        }

                    case 'github':
                        if ($item->platform==='github') {
                            $this->githubUpdated=$item->username; 
                            $this->github=$this->githubUpdated; 
                        }
                    case 'linkedin':
                        if ($item->platform==='linkedin') {
                            $this->linkedinUpdated=$item->username;
                            $this->linkedin=$this->linkedinUpdated; 
                        }
                        break;
                    
                    default:
                        
                        // 'Unsupported Platform'; 

                        break;
                }
            }
        }

        // $this->facebookUpdated="Test";
    }

    public function render()
    {

        $this->organizations=User::find($this->user->id)->organizations;
        $this->user=User::find($this->user->id); 
       

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
        $this->facebookUpdated=$this->facebookUpdated;

        if (empty($this->facebookUpdated)) {
            $this->facebook=null;
        }
        else {
            
            $this->facebook=$this->facebookUpdated; 
        }
      
    }
    public function updatedInstagramUpdated(){
        if (empty($this->instagramUpdated)) {
            $this->instagram=null;
        }
        else{
            $this->instagram=$this->instagramUpdated; 
        }
 
     }
     public function updatedTwitterUpdated(){
        if (empty($this->twitterUpdated)) {
            $this->twitter=null; 
        }
        else{

            $this->twitter=$this->twitterUpdated; 
        }
 
    }
    public function updatedDribbbleUpdated(){
        if (empty($this->dribbbleUpdated)) {
            $this->dribbble=null; 
        }
        else{
            $this->dribbble=$this->dribbbleUpdated; 
        }
 
    }
    public function updatedGithubUpdated(){
        if (empty($this->githubUpdated)) {
            $this->github=null; 
        }
        else{
            $this->github=$this->githubUpdated; 
        }
 
    }
    public function updatedLinkedinUpdated(){
        if (empty($this->linkedinUpdated)) {
            $this->linkedin=null; 
        }
        else{
            $this->linkedin=$this->linkedinUpdated; 
        }
 
    }

    

}
