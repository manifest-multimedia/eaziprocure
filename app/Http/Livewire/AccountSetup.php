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
    public $logo; 
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
    public $registration_type='default';

    public function mount(){
        
        $this->user=Auth::user(); 
        $this->role='administrator'; 

        $org=User::find($this->user->id)->organizations;
        
        // dd($org);

        $this->logo='images/avatars/thumb-3.jpg';


        $this->socials=User::find($this->user->id)->socials; 

        if(!is_null($this->socials)) {
            
            foreach ($this->socials as $item) {
               
                switch (strtolower($item->platform)) {
                    case 'facebook':      
                           $this->facebookUpdated=$item->username;   
                           $this->facebook=$this->facebookUpdated;                          
                    break; 

                    case 'instagram':
                            $this->instagramUpdated=$item->username; 
                            $this->instagram=$this->instagramUpdated;
                    break; 

                    case 'twitter':
                           $this->twitterUpdated=$item->username;
                           $this->twitter=$this->twitterUpdated; 
                    break; 

                    case 'dribbble':
                            $this->dribbbleUpdated=$item->username;  
                            $this->dribbble=$this->dribbbleUpdated; 
                    break; 

                    case 'github':
                            $this->githubUpdated=$item->username; 
                            $this->github=$this->githubUpdated; 
                    break; 

                    case 'linkedin':
                            $this->linkedinUpdated=$item->username;
                            $this->linkedin=$this->linkedinUpdated; 
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
public function invitation() {

    $name; 
    $email;     
    
    //send invitation 

}
    

}
