<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Auth;
use App\Models\User; 
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Notification;
use App\Models\UserOrganizations; 
use App\Models\org_profiles;
use App\Models\social_profiles;
// use Livewire\Carbon;

// Track & Delete Unwanted/Unused Images 
// $image_path = "/images/filename.ext";  // Value is not URL but directory file path
// if(File::exists($image_path)) {
//     File::delete($image_path);
// }

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
            $update_details->org_logo=$this->logo;
            $update_details->save();
    
        }
        

        $this->logo=$this->logo;


    }
    public function updatedFacebookUpdated(){
        //Check for existing organization for user. 
        $user_id=Auth::user()->id; 
        $org_id=UserOrganizations::where('user_id', $user_id)->first()->org_id; 
        
        $profile=social_profiles::where('org_id', $org_id)
        ->where('platform', 'facebook')->first();

        if(is_null($profile)){
            // Create Profile 
            $create_profile=new social_profiles; 
            $create_profile->org_id=$org_id; 
            $create_profile->platform='facebook'; 
            $create_profile->link='https://facebook.com/'.$this->facebookUpdated; 
            $create_profile->username=$this->facebookUpdated;
            $create_profile->save();

        }
        else{
            
           
                // Update Profile
                $update_profile=social_profiles::where('org_id', $org_id)
                ->where('platform', 'facebook')->first();
                $update_profile->link='https://facebook.com/'.$this->facebookUpdated; 
    
                $update_profile->username=$this->facebookUpdated; 
                $update_profile->save();
           

        }
      
    }
    public function updatedInstagramUpdated(){
        //Check for existing organization for user. 
        $user_id=Auth::user()->id; 
        $org_id=UserOrganizations::where('user_id', $user_id)->first()->org_id; 
        
        $profile=social_profiles::where('org_id', $org_id)
        ->where('platform', 'instagram')->first();

        if(is_null($profile)){
            // Create Profile 
            $create_profile=new social_profiles; 
            $create_profile->org_id=$org_id; 
            $create_profile->platform='instagram'; 
            $create_profile->link='https://instagram.com/'.$this->instagramUpdated; 
            $create_profile->username=$this->instagramUpdated;
            $create_profile->save();

        }
        else{
            
            
                // Update Profile
                $update_profile=social_profiles::where('org_id', $org_id)
                ->where('platform', 'instagram')->first();
                $update_profile->link='https://instagram.com/'.$this->instagramUpdated; 
    
                $update_profile->username=$this->instagramUpdated; 
                $update_profile->save(); 

        }
 
     }


     public function updatedTwitterUpdated(){
       //Check for existing organization for user. 
       $user_id=Auth::user()->id; 
       $org_id=UserOrganizations::where('user_id', $user_id)->first()->org_id; 
       
       $profile=social_profiles::where('org_id', $org_id)
       ->where('platform', 'twitter')->first();

       if(is_null($profile)){
           // Create Profile 
           $create_profile=new social_profiles; 
           $create_profile->org_id=$org_id; 
           $create_profile->platform='twitter'; 
           $create_profile->link='https://twitter.com/'.$this->twitterUpdated; 
           $create_profile->username=$this->twitterUpdated;
           $create_profile->save();

       }
       else{
           
           
               // Update Profile
               $update_profile=social_profiles::where('org_id', $org_id)
               ->where('platform', 'twitter')->first();
               $update_profile->link='https://twitter.com/'.$this->twitterUpdated; 
   
               $update_profile->username=$this->twitterUpdated; 
               $update_profile->save(); 

       }
 
    }
    
    public function updatedDribbbleUpdated(){
        //Check for existing organization for user. 
        $user_id=Auth::user()->id; 
        $org_id=UserOrganizations::where('user_id', $user_id)->first()->org_id; 
        
        $profile=social_profiles::where('org_id', $org_id)
        ->where('platform', 'dribbble')->first();

        if(is_null($profile)){
            // Create Profile 
            $create_profile=new social_profiles; 
            $create_profile->org_id=$org_id; 
            $create_profile->platform='dribbble'; 
            $create_profile->link='https://dribbble.com/'.$this->dribbbleUpdated; 
            $create_profile->username=$this->dribbbleUpdated;
            $create_profile->save();

        }
        else{
            
            
                // Update Profile
                $update_profile=social_profiles::where('org_id', $org_id)
                ->where('platform', 'dribbble')->first();
                $update_profile->link='https://dribbble.com/'.$this->dribbbleUpdated; 
    
                $update_profile->username=$this->dribbbleUpdated; 
                $update_profile->save(); 

        }
 
    }
    public function updatedGithubUpdated(){
       //Check for existing organization for user. 
       $user_id=Auth::user()->id; 
       $org_id=UserOrganizations::where('user_id', $user_id)->first()->org_id; 
       
       $profile=social_profiles::where('org_id', $org_id)
       ->where('platform', 'github')->first();

       if(is_null($profile)){
           // Create Profile 
           $create_profile=new social_profiles; 
           $create_profile->org_id=$org_id; 
           $create_profile->platform='github'; 
           $create_profile->link='https://github.com/'.$this->githubUpdated; 
           $create_profile->username=$this->githubUpdated;
           $create_profile->save();

       }
       else{
           
        // dd($this->githubUpdated);
               // Update Profile
               $username=$this->githubUpdated; 
               $update_profile=social_profiles::where('org_id', $org_id)
               ->where('platform', 'github')->first();
               $update_profile->link='https://github.com/'.$username; 

               $update_profile->username=$this->githubUpdated; 
               $update_profile->save(); 

       }
 
    }
    public function updatedLinkedinUpdated(){
        //Check for existing organization for user. 
       $user_id=Auth::user()->id; 
       $org_id=UserOrganizations::where('user_id', $user_id)->first()->org_id; 
       
       $profile=social_profiles::where('org_id', $org_id)
       ->where('platform', 'linkedin')->first();

       if(is_null($profile)){
           // Create Profile 
           $create_profile=new social_profiles; 
           $create_profile->org_id=$org_id; 
           $create_profile->platform='linkedin'; 
           $update_profile->link='https://linkedin.com/company'.'/'.$this->linkedinUpdated;           $create_profile->username=$this->linkedinUpdated;
           $create_profile->save();

       }
       else{
           
           
               // Update Profile
               $update_profile=social_profiles::where('org_id', $org_id)
               ->where('platform', 'linkedin')->first();
               $update_profile->link='https://linkedin.com/company'.'/'.$this->linkedinUpdated; 
   
               $update_profile->username=$this->linkedinUpdated; 
               $update_profile->save(); 

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
