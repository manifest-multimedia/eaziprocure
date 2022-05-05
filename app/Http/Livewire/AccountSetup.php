<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Auth;
use App\Models\User; 
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Notification;
use App\Models\UserOrganizations; 
use App\Models\OrgProfiles;
use App\Models\SocialProfiles;
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
    public $facebook_switch;
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

    //verification documents
    
    public $business_registration_doc; 
    public $gra_registration_doc; 
    public $incorporation_cert_doc; 
    public $commence_business_cert_doc; 
    public $ssnit_clearance_doc; 
    public $tax_clearance_doc; 
    public $ppa_cert_doc; 

    public function mount(){
        
      
        $this->user=Auth::user(); 
        $this->role='administrator'; 

        $org=User::find($this->user->id)->organizations;
        
        //Check for existing orgnization for user. 
        $user_id=Auth::user()->id; 
        $org=UserOrganizations::where('user_id', $user_id)->first(); 
        if(is_null($org)) {

            $this->logo=asset('images/avatars/thumb-3.jpg');
            $this->company_name=''; 
        }
        else {

            $org_details=OrgProfiles::where('id', $org->org_id)->first(); 
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
                           if(is_null($this->facebookUpdated=$item->username)){
                            $this->facebook=null; 
                        }   else {
                               $this->facebook=$this->facebookUpdated;                          

                           }
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

    public function updatedRegistrationType() {

        switch ($this->registration_type) {
            case 'Sole Proprietorship':
               //Check if Org Profile Exists

               $user_id=Auth::user()->id; 
               $org=UserOrganizations::where('user_id', $user_id)->first(); 
               
               if(is_null($org)) {
                //Create Organization 
                $create_organization=new OrgProfiles;
                $create_organization->org_type=$this->registration_type;
                $create_organization->save();
                
                $org_id=$create_organization->id; 
                   
               }
               
               else {
       
                    //Update Registration Type for Existing Organization 
                $update_details=OrgProfiles::where('id', $org->id)->first();
                $update_details->update(['org_type'=>$this->registration_type]);
                // $update_details->save();
       
               }

                break;

            case 'Company Limited by Shares':
                 //Check if Org Profile Exists

               $user_id=Auth::user()->id; 
               $org=UserOrganizations::where('user_id', $user_id)->first(); 
               
               if(is_null($org)) {
                //Create Organization 
                $create_organization=new OrgProfiles;
                $create_organization->org_type=$this->registration_type;
                $create_organization->save();
                
                $org_id=$create_organization->id; 
                   
               }
               
               else {
       
                    //Update Registration Type for Existing Organization 
                $update_details=OrgProfiles::where('id', $org->id)->first();
                $update_details->update(['org_type'=>$this->registration_type]);
       
               }
                
                break;

            case 'Company Limited by Guarantee':
                 //Check if Org Profile Exists

               $user_id=Auth::user()->id; 
               $org=UserOrganizations::where('user_id', $user_id)->first(); 
               
               if(is_null($org)) {
                //Create Organization 
                $create_organization=new OrgProfiles;
                $create_organization->org_type=$this->registration_type;
                $create_organization->save();
                
                $org_id=$create_organization->id; 
                   
               }
               
               else {
       
                    //Update Registration Type for Existing Organization 
                $update_details=OrgProfiles::where('id', $org->id)->first();
                $update_details->update(['org_type'=>$this->registration_type]);
               
       
               }
                
                break;
            
            case 'Unlimited Company':
                 //Check if Org Profile Exists

               $user_id=Auth::user()->id; 
               $org=UserOrganizations::where('user_id', $user_id)->first(); 
               
               if(is_null($org)) {
                //Create Organization 
                $create_organization=new OrgProfiles;
                $create_organization->org_type=$this->registration_type;
                $create_organization->save();
                
                $org_id=$create_organization->id; 
                   
               }
               
               else {
       
                    //Update Registration Type for Existing Organization 
                $update_details=OrgProfiles::where('id', $org->id)->first();
                $update_details->update(['org_type'=>$this->registration_type]);
                
       
               }
                
                break;

            case 'External Company':
                 //Check if Org Profile Exists

               $user_id=Auth::user()->id; 
               $org=UserOrganizations::where('user_id', $user_id)->first(); 
               
               if(is_null($org)) {
                //Create Organization 
                $create_organization=new OrgProfiles;
                $create_organization->org_type=$this->registration_type;
                $create_organization->save();
                
                $org_id=$create_organization->id; 
                   
               }
               
               else {
       
                    //Update Registration Type for Existing Organization 
                $update_details=OrgProfiles::where('id', $org->id)->first();
                $update_details->update(['org_type'=>$this->registration_type]);
                
       
               }
                
                break;
        

            default:
                # code...
                break;
        }

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
            $create_organization=new OrgProfiles;
            $create_organization->org_logo=$this->logo;
            $create_organization->save();
            
            $org_id=$create_organization->id; 

            $logo=$this->logo;

            $this->validate([
                'logo' => 'image|max:5024', 
            ]); 
    
           //    $url = $logo->store('logos', 'public'); 
           $filename=Auth::user()->id.'_'.$org_id.'_logo_'.$logo->getClientOriginalName();
           $url = $logo->storeAs('public/logos', $filename); 
    
           $this->logo = $url;
    

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
           $filename=Auth::user()->id.'_'.$org_id.'_logo_'.$logo->getClientOriginalName();
           $url = $logo->storeAs('public/logos', $filename); 

           $this->logo = $url;

            //Update Logo for Existing Organization 
            $update_details=OrgProfiles::where('id', $org->id)->first();
            $update_details->update(['org_logo'=>$this->logo]);

            $this->logo=$this->logo;
    
        }
        
        $this->logo=$this->logo;

    }
    public function updatedFacebookUpdated(){
        if(empty($this->facebookUpdated)){
            $this->facebook=null;
        } else {
            
            $this->facebook=$this->facebookUpdated;
        }
        //Check for existing organization for user. 
        $user_id=Auth::user()->id; 
        $org_id=UserOrganizations::where('user_id', $user_id)->first()->org_id; 
        
        $profile=SocialProfiles::where('org_id', $org_id)
        ->where('platform', 'facebook')->first();

        if(is_null($profile)){
            // Create Profile 
            $create_profile=new SocialProfiles; 
            $create_profile->org_id=$org_id; 
            $create_profile->platform='facebook'; 
            $create_profile->link='https://facebook.com/'.$this->facebookUpdated; 
            $create_profile->username=$this->facebookUpdated;
            $create_profile->save();

        }
        else{
            
                // Update Profile
                $update_profile=SocialProfiles::where('org_id', $org_id)
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
        
        $profile=SocialProfiles::where('org_id', $org_id)
        ->where('platform', 'instagram')->first();

        if(is_null($profile)){
            // Create Profile 
            $create_profile=new SocialProfiles; 
            $create_profile->org_id=$org_id; 
            $create_profile->platform='instagram'; 
            $create_profile->link='https://instagram.com/'.$this->instagramUpdated; 
            $create_profile->username=$this->instagramUpdated;
            $create_profile->save();

        }
        else{
            
                // Update Profile
                $update_profile=SocialProfiles::where('org_id', $org_id)
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
       
       $profile=SocialProfiles::where('org_id', $org_id)
       ->where('platform', 'twitter')->first();

       if(is_null($profile)){
           // Create Profile 
           $create_profile=new SocialProfiles; 
           $create_profile->org_id=$org_id; 
           $create_profile->platform='twitter'; 
           $create_profile->link='https://twitter.com/'.$this->twitterUpdated; 
           $create_profile->username=$this->twitterUpdated;
           $create_profile->save();

       }
       else{
           
               // Update Profile
               $update_profile=SocialProfiles::where('org_id', $org_id)
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
        
        $profile=SocialProfiles::where('org_id', $org_id)
        ->where('platform', 'dribbble')->first();

        if(is_null($profile)){
            // Create Profile 
            $create_profile=new SocialProfiles; 
            $create_profile->org_id=$org_id; 
            $create_profile->platform='dribbble'; 
            $create_profile->link='https://dribbble.com/'.$this->dribbbleUpdated; 
            $create_profile->username=$this->dribbbleUpdated;
            $create_profile->save();

        }
        else{
            
            
                // Update Profile
                $update_profile=SocialProfiles::where('org_id', $org_id)
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
       
       $profile=SocialProfiles::where('org_id', $org_id)
       ->where('platform', 'github')->first();

       if(is_null($profile)){
           // Create Profile 
           $create_profile=new SocialProfiles; 
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
               $update_profile=SocialProfiles::where('org_id', $org_id)
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
       
       $profile=SocialProfiles::where([
           ['org_id', $org_id], 
           ['platform', 'linkedin'],
        ])->first();

       if(is_null($profile)){
           // Create Profile 
           $create_profile=new SocialProfiles; 
           $create_profile->org_id=$org_id; 
           $create_profile->platform='linkedin'; 
           $create_profile->link='https://linkedin.com/company'.'/'.$this->linkedinUpdated;           
           $create_profile->username=$this->linkedinUpdated;
           $create_profile->save();

       }
       else{
           
           
               // Update Profile
               $update_profile=SocialProfiles::where('org_id', $org_id)
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
    
        //Send invitation 
        Notification::route('mail', $email)->notify(new NewUserInvitationNotification($name, $email, $buldurl, $organization_name, $current_user_name));

        //Store Invitation Details 


    }
    
    public function updatedCompanyName(){

         //Check for existing organization for user. 
         $user_id=Auth::user()->id; 
         $org=UserOrganizations::where('user_id', $user_id)->first();
         
         if(is_null($org)) {

            $create_organization=new OrgProfiles;
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

            $update_details=OrgProfiles::where('id', $org->id)->first();
            $update_details->org_name=$this->company_name;
            $update_details->save();

         }
    }

    public function updatedCompanyEmail(){
       //Check for existing organization for user. 
       $user_id=Auth::user()->id; 
       $org=UserOrganizations::where('user_id', $user_id)->first();
       
       if(is_null($org)) {

          $create_organization=new OrgProfiles;
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

          $update_details=OrgProfiles::where('id', $org->id)->first();
          $update_details->org_email=$this->company_email;
          $update_details->save();

       }
   }

   public function updatedCompanyAddress(){
   
    //Check for existing organization for user. 
    $user_id=Auth::user()->id; 
    $org=UserOrganizations::where('user_id', $user_id)->first();
    
    if(is_null($org)) {

       $create_organization=new OrgProfiles;
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

       $update_details=OrgProfiles::where('id', $org->id)->first();
       $update_details->org_address=$this->company_address;
       $update_details->save();

    }
}

public function updatedCompanyCity(){
   
    //Check for existing organization for user. 
    $user_id=Auth::user()->id; 
    $org=UserOrganizations::where('user_id', $user_id)->first();
    
    if(is_null($org)) {

       $create_organization=new OrgProfiles;
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

       $update_details=OrgProfiles::where('id', $org->id)->first();
       $update_details->org_city=$this->company_city;
       $update_details->save();

    }
}


public function updatedCompanyCountry(){
   
    //Check for existing organization for user. 
    $user_id=Auth::user()->id; 
    $org=UserOrganizations::where('user_id', $user_id)->first();
    
    if(is_null($org)) {

       $create_organization=new OrgProfiles;
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

       $update_details=OrgProfiles::where('id', $org->id)->first();
       $update_details->org_country=$this->company_country;
       $update_details->save();

    }
}

// Verification Documents Upload 
  
    // public $tax_clearance_doc; 
    // public $ppa_cert_doc; 
public function updatedBusinessRegistrationDoc(){

//Check if business registration type supports uploading this file. 
//Validate File & Upload 
//Mark File Status As Complete.

}

public function updatedIncorporationCertDoc(){

    //Check if business registration type supports uploading this file. 
    //Validate File & Upload 
    //Mark File Status As Complete.
    
    
    }

public function updatedGraRegistrationDoc(){
    //Check if business registration type supports uploading this file. 
    //Validate File & Upload 
    //Mark File Status As Complete.
}

public function updatedSnnitClearanceDoc(){
    //Check if business registration type supports uploading this file. 
    //Validate File & Upload 
    //Mark File Status As Complete.
}

public function updatedCommenceBusinessCertDoc(){
    //Check if business registration type supports uploading this file. 
    //Validate File & Upload 
    //Mark File Status As Complete.
}

public function updatedTaxClearanceDoc(){
    //Check if business registration type supports uploading this file. 
    //Validate File & Upload 
    //Mark File Status As Complete.
}

public function updatedPPACertDoc(){
    //Check if business registration type supports uploading this file. 
    //Validate File & Upload 
    //Mark File Status As Complete.
}

public function CompleteSetup(){

    //Check for existing organization for user. 
    $user_id=Auth::user()->id; 
    $org=UserOrganizations::where('user_id', $user_id)->first();


    //Check for all details


    //Mark Account as Verified

    $complete_setup=User::find($user_id);
    $complete_setup->account_status='1';
    $complete_setup->save(); 

    return redirect('/dashboard'); 

    //Proceed to dashboard

}

}
