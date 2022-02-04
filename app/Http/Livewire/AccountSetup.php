<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Auth;
use App\Models\User; 
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Notification;
use App\Models\UserOrganizations; 
use App\Models\org_profiles;
// use Livewire\Carbon;

use App\Notifications\NewUserInvitationNotification; 

class AccountSetup extends Component


{
    use WithFileUploads;

    public $user=[]; 
    public $role; 
    public $listcountries=[];
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
    public $org_count; 

    public $StaffEmail; 
    public $StaffName; 

    public $company_name;
    public $company_email;
    public $company_address;
    public $company_city;
    public $company_country;

    public function mount(){
        
      
        $this->user=Auth::user(); 
        $this->role='administrator'; 

        $org=User::find($this->user->id)->organizations;
        
        //Check for existing orgnizatino for user. 
        $user_id=Auth::user()->id; 
        $org=UserOrganizations::where('user_id', $user_id)->first(); 
        if(is_null($org)) {

            $this->logo=asset('images/avatars/thumb-3.jpg');
            $this->company_name=''; 
        }
        else {

            $org_details=org_profiles::where('id', $org->org_id)->first(); 
            $this->logo=$org_details->org_logo;
            $this->company_name=$org_details->org_name; 
            $this->company_email=$org_details->org_email; 
            $this->company_address=$org_details->org_address; 
            $this->company_city=$org_details->org_city; 
            $this->company_country=$org_details->org_country; 

        }


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

        $this->listcountries=getCountriesList(); 
        $query=User::find($this->user->id)->organizations();
        if($query->count()){
            $this->org_count=$query->count(); 
            $organizations=User::find($this->user->id);
           
            // Tag::whereHas('categories', function ($query) use ($chosenCategoriesIds) {
            //     $query->whereIn('id', $chosenCategoriesIds);
            // })->get();

         } else {
             $this->org_count=0; 
             $organizations=[]; 
         }
                
        $this->user=User::find($this->user->id); 
       
        return view('livewire.account-setup', compact('organizations'));
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

       
        //Check for existing organization for user. 
        $user_id=Auth::user()->id; 
        $org=UserOrganizations::where('user_id', $user_id)->first(); 

      

        if(is_null($org) ){
            //Create Organization 
            $create_organization=new org_profiles;
            // $create_organization->org_name='';
            // $create_organization->org_email='';
            // $create_organization->org_address='';
            // $create_organization->org_city='';
            // $create_organization->org_country='';
            $create_organization->org_logo=$this->logo;
            $create_organization->save();
            
            $org_id=$create_organization->id; 

            $logo=$this->logo;

            $this->validate([
                'logo' => 'image|max:5024', 
            ]); 
    
           //    $url = $logo->store('logos', 'public'); 
    
           $url = $logo->store('logos', 'public'); 
    
           $this->logo = 'storage/'.$url;
    

            $store=new UserOrganizations; 
            $store->timestamps=false;
            $store->user_id=$user_id; 
            $store->org_id=$org_id;
            $store->save();
            
        } else {

            $org_id=$org->id;
            $logo=$this->logo;

            $this->validate([
                'logo' => 'image|max:5024', 
            ]); 
    
           //    $url = $logo->store('logos', 'public'); 
    
           $url = $logo->store('logos', 'public'); 
    
           $this->logo = 'storage/'.$url;

            //Update Logo for Existing Organization 
            $update_details=org_profiles::where('id', $org->id)->first();
            // $update_details->org_name='';
            // $update_details->org_email='';
            // $update_details->org_address='';
            // $update_details->org_city='';
            // $update_details->org_country='';
            $update_details->org_logo=$this->logo;
            $update_details->save();
            // dd('Updated');
        }
        

        $this->logo=$this->logo;


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

        $email = $this->StaffEmail;
        $name = $this->StaffName; 
        $user=[$email, $name];
        
        
        // dd('Invitation');
        $current_user=$this->user;
        $current_user_id=$current_user->id; 
        $current_user_name=$current_user->name; 
        $current_organization=User::find($this->user->id)->organizations->first();
        $organization_name=$current_organization->org_name;
        $organization_id=$current_organization->id; 
        // dd($current_organization);
        $name=getFirstName($name); 
        $email;     
        $systemurl='https://eaziprocure.com';
        //build url
        $buldurl=$systemurl."/invitation".'/'.$current_user_id.'/'.$organization_id;
    
        Notification::route('mail', $email)->notify(new NewUserInvitationNotification($name, $email, $buldurl, $organization_name, $current_user_name));

    

        //Store Invitation Details 

        //send invitation 

    }
    
    public function updatedCompanyName(){

         //Check for existing organization for user. 
         $user_id=Auth::user()->id; 
         $org=UserOrganizations::where('user_id', $user_id)->first();
         
         if(is_null($org)) {

            $create_organization=new org_profiles;
            $create_organization->org_name='';
            $create_organization->save();
            
            $org_id=$create_organization->id; 

            $store=new UserOrganizations; 
            $store->timestamps=false;
            $store->user_id=$user_id; 
            $store->org_id=$org_id;
            $store->save();


         }
         else{

            $update_details=org_profiles::where('id', $org->id)->first();
            $update_details->org_name=$this->company_name;
            $update_details->save();

         }
    }

    public function updatedCompanyEmail(){
       //Check for existing organization for user. 
       $user_id=Auth::user()->id; 
       $org=UserOrganizations::where('user_id', $user_id)->first();
       
       if(is_null($org)) {

          $create_organization=new org_profiles;
          $create_organization->org_email='';
          $create_organization->save();
          
          $org_id=$create_organization->id; 

          $store=new UserOrganizations; 
          $store->timestamps=false;
          $store->user_id=$user_id; 
          $store->org_id=$org_id;
          $store->save();


       }
       else{

          $update_details=org_profiles::where('id', $org->id)->first();
          $update_details->org_email=$this->company_email;
          $update_details->save();

       }
   }

   public function updatedCompanyAddress(){
   
    //Check for existing organization for user. 
    $user_id=Auth::user()->id; 
    $org=UserOrganizations::where('user_id', $user_id)->first();
    
    if(is_null($org)) {

       $create_organization=new org_profiles;
       $create_organization->org_address='';
       $create_organization->save();
       
       $org_id=$create_organization->id; 

       $store=new UserOrganizations; 
       $store->timestamps=false;
       $store->user_id=$user_id; 
       $store->org_id=$org_id;
       $store->save();


    }
    else{

       $update_details=org_profiles::where('id', $org->id)->first();
       $update_details->org_address=$this->company_address;
       $update_details->save();

    }
}


public function updatedCompanyCity(){
   
    //Check for existing organization for user. 
    $user_id=Auth::user()->id; 
    $org=UserOrganizations::where('user_id', $user_id)->first();
    
    if(is_null($org)) {

       $create_organization=new org_profiles;
       $create_organization->org_city='';
       $create_organization->save();
       
       $org_id=$create_organization->id; 

       $store=new UserOrganizations; 
       $store->timestamps=false;
       $store->user_id=$user_id; 
       $store->org_id=$org_id;
       $store->save();

    }
    else{

       $update_details=org_profiles::where('id', $org->id)->first();
       $update_details->org_city=$this->company_city;
       $update_details->save();

    }
}


public function updatedCompanyCountry(){
   
    //Check for existing organization for user. 
    $user_id=Auth::user()->id; 
    $org=UserOrganizations::where('user_id', $user_id)->first();
    
    if(is_null($org)) {

       $create_organization=new org_profiles;
       $create_organization->org_country='';
       $create_organization->save();
       
       $org_id=$create_organization->id; 

       $store=new UserOrganizations; 
       $store->timestamps=false;
       $store->user_id=$user_id; 
       $store->org_id=$org_id;
       $store->save();

    }
    else{

       $update_details=org_profiles::where('id', $org->id)->first();
       $update_details->org_country=$this->company_country;
       $update_details->save();

    }
}




}
