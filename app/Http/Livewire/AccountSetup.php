<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User; 
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Notification;
use App\Models\UserOrganizations; 
use App\Models\OrgProfiles;
use App\Models\SocialProfiles;
use App\Models\UserInvitation;
// use Livewire\Carbon;

// Track & Delete Unwanted/Unused Images 
// $image_path = "/images/filename.ext";  // Value is not URL but directory file path
// if(File::exists($image_path)) {
//     File::delete($image_path);
// }

use App\Notifications\NewUserInvitationNotification;
use stdClass;

class AccountSetup extends Component


{
    use WithFileUploads;

    //User Information 
    public $user=null; 
    public $role; 
    public $newrole;
    public $language; 
    public $mobile; 
    public $newmobile;
   
    //Socials
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

    //Company Details
    public $StaffEmail; 
    public $StaffName; 

    public $listcountries=[];
    public $logo; 
    public $company_name;
    public $company_email;
    public $company_address;
    public $company_city;
    public $company_country;
    public $org_id;

    //verification documents
    
    public $business_registration_doc; 
    public $gra_registration_doc; 
    public $incorporation_cert_doc; 
    public $commence_business_cert_doc; 
    public $ssnit_clearance_doc; 
    public $tax_clearance_doc; 
    public $ppa_cert_doc; 


    //Invitation
    public $inviteduser_role;
    public $invitedusers=[];

    public function mount(){
        
        //Assign User Details to $user variable; 
        $this->user=Auth::user(); 
        $this->mobile=$this->user->mobile;
        $this->newmobile=$this->mobile;
        $this->language=$this->user->language;
        
        //Check for existing orgnization for user. 
       
        // $org=User::find($this->user->id)->organizations; 
        $user_id=$this->user->id; 
        $org=UserOrganizations::where('user_id', $user_id)->first(); 
        if(is_null($org)) {

            //Create Blank Organization For User
            $this->logo='avatars/thumb-3.jpg';
            $this->company_name=''; 

            $new_org=new OrgProfiles; 
            $new_org->org_logo=$this->logo; 
            $new_org->save(); 
            //Update $org_id;
            $this->org_id=$new_org->id; 
            // Associate Newly Created Organation Profile to User
            $associate_profile=new UserOrganizations; 
            $associate_profile->timestamps=false;
            $associate_profile->user_id=$this->user->id; 
            $associate_profile->org_id=$this->org_id; 
            $associate_profile->save();
            
        }

            //Where User Already Has an Associted Org Profile

        else {

            //Set/Update $org_id;
            $this->org_id = $org->org_id;

            //Check for Role in Organization 
            $role=UserOrganizations::where('org_id', $this->org_id)
            ->where('user_id', $this->user->id)->first()->user_privilege;
           
            switch ($role) {
                case '':
                    $this->newrole='administrator';
                    break; 
                case '0':
                    $this->newrole='staff';

                    break;

                case '1':
                    $this->newrole='administrator';
                    break;

                case '2':
                    $this->newrole='admin';
                    break; 

                case '3':
                    $this->newrole='finance'; 
                    break; 

                case '4':
                    $this->newrole='hr';

                    break; 

                case '5': 
                    $this->newrole='procurement';
                    break; 

                case '6':
                    $this->newrole='sales'; 
                    break; 
                default:
                    $this->newrole='administrator';
                    break;
            }

            // Assign Org Profile Details to Fields  
            $org_details=OrgProfiles::find($this->org_id); 

            $this->logo=$org_details->org_logo;
            $this->company_name=$org_details->org_name; 
            $this->company_email=$org_details->org_email; 
            $this->company_address=$org_details->org_address; 
            $this->company_city=$org_details->org_city; 
            $this->company_country=$org_details->org_country; 

        }

        //Find Associated Social Profiles for Organization 
        $this->socials=User::find($this->user->id)->socials; 
       

        if($this->socials->count() >= 1){
            
            foreach ($this->socials as $item) {
               
                switch (strtolower($item->platform)) {
                    case 'facebook':     
                        
                        $this->facebook=$item->username;
                        $this->facebookUpdated=$item->username;

                        // dd($this->item->username); 

                        //    if(is_null($this->facebookUpdated=$item->username)){
                        //     $this->facebook=null; 
                        // }   else {
                        //        $this->facebook=$this->facebookUpdated.'jay';                          

                        //    }
                    break; 

                    case 'instagram':
                            // $this->instagramUpdated=$item->username; 
                            // $this->instagram=$this->instagramUpdated;

                            $this->instagram=$item->username;
                            $this->instagramUpdated=$item->username;
                    break; 

                    case 'twitter':
                           $this->twitter=$item->username;
                           $this->twitterUpdated=$item->username; 
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
        
        $query=UserOrganizations::where('org_id', $this->org_id)->where('user_id', $this->user->id)->first(); 
        if($query){
            $org_id=$query->org_id;

        $this->invitedusers=UserInvitation::where('user_id',$this->user->id)
        ->where('org_id',$org_id)
        ->where('status', 'pending')->get();
        } else{
            $this->invitedusers=UserInvitation::where('user_id', $this->user->id)->get();
        }

        $this->listcountries=getCountriesList(); 
                
        $this->user=User::find($this->user->id); 
       
        return view('livewire.account-setup');
    }

    public function updatedRegistrationType() {

        switch ($this->registration_type) {
            case 'Sole Proprietorship':
       
                //Update Registration Type for Existing Organization 
                $update_details=OrgProfiles::where('id', $this->org_id)->first();
                $update_details->update(['org_type'=>$this->registration_type]);
               
                break;

            case 'Company Limited by Shares':
              
                //Update Registration Type for Existing Organization 
                $update_details=OrgProfiles::where('id', $this->org_id)->first();
                $update_details->update(['org_type'=>$this->registration_type]);
                
                break;

            case 'Company Limited by Guarantee':
                
                //Update Registration Type for Existing Organization 
                $update_details=OrgProfiles::where('id', $this->org_id)->first();
                $update_details->update(['org_type'=>$this->registration_type]);
                
                break;
            
            case 'Unlimited Company':
                
                //Update Registration Type for Existing Organization 
                $update_details=OrgProfiles::where('id', $this->org_id)->first();
                $update_details->update(['org_type'=>$this->registration_type]);
                
                break;

            case 'External Company':
            
                //Update Registration Type for Existing Organization 
                $update_details=OrgProfiles::where('id', $this->org_id)->first();
                $update_details->update(['org_type'=>$this->registration_type]);
                
                break;
        

            default:
                # code...
                break;
        }

    }

    public function updatedNewRole(){

        $update=UserOrganizations::where('user_id', $this->user->id)
        ->where('org_id', $this->org_id)
        ->update(['user_privilege'=>$this->newrole]);
        
    }

    public function updatedNewMobile(){
        //Compare Updated  Mobile Number with Previously Stored Mobile Number
        // dd($this->mobile);
        
        if(!is_null($this->mobile)){

            if ($this->newmobile!=$this->mobile) {
                # code...
                $update_mobile=User::where('id', $this->user->id)
                ->update(['mobile'=> $this->newmobile]);
            }
        } else {
            $update_mobile=User::where('id', $this->user->id)
            ->update(['mobile'=> $this->newmobile]);
        }
        
    }

    public function updatedLogo(){

            $org_id=$this->org_id;
            $logo=$this->logo;

            $this->validate([
                'logo' => 'image|max:5024', 
            ]); 
    
           //    $url = $logo->store('logos', 'public'); 
           $filename=$this->user->id.'_'.$org_id.'_logo_'.$logo->getClientOriginalName();
           $url = $logo->storeAs('public/logos', $filename); 

           $this->logo = $url;

           //Update Logo for Existing Organization 
           $update_details=OrgProfiles::where('id', $this->org_id)->first();
           $update_details->update(['org_logo'=>$this->logo]);

           $this->logo=$this->logo;
      
        $this->logo=$this->logo;

    }
    public function updatedFacebookUpdated(){

       $this->facebook=$this->facebookUpdated;
      
        $profile=SocialProfiles::where('org_id', $this->org_id)
        ->where('platform', 'facebook')->first();

        if(is_null($profile)){
            // Create Profile 
            $create_profile=new SocialProfiles; 
            $create_profile->org_id=$this->org_id; 
            $create_profile->platform='facebook'; 
            $create_profile->link='https://facebook.com/'.$this->facebookUpdated; 
            $create_profile->username=$this->facebookUpdated;
            $create_profile->save();

        }
        else{
                // Update Profile
                $update_profile=SocialProfiles::where('org_id', $this->org_id)
                ->where('platform', 'facebook')->update([
                    'link'=>'https://facebook.com/'.$this->facebookUpdated, 
                    'username'=>$this->facebookUpdated
                ]);
        }
      
    }

    public function updatedInstagramUpdated(){

        $this->instagram=$this->instagramUpdated;
        
        $profile=SocialProfiles::where('org_id', $this->org_id)
        ->where('platform', 'instagram')->first();

        if(is_null($profile)){
            // Create Profile 
            $create_profile=new SocialProfiles; 
            $create_profile->org_id=$this->org_id; 
            $create_profile->platform='instagram'; 
            $create_profile->link='https://instagram.com/'.$this->instagramUpdated; 
            $create_profile->username=$this->instagramUpdated;
            $create_profile->save();

        }
        else{
            
                // Update Profile
                $update_profile=SocialProfiles::where('org_id', $this->org_id)
                ->where('platform', 'instagram')->update([
                    'link'=>'https://instagram.com/'.$this->instagramUpdated, 
                    'username'=>$this->instagramUpdated
                ]);

        }
 
     }

     public function updatedTwitterUpdated(){
        
        $this->twitter=$this->twitterUpdated;

       $profile=SocialProfiles::where('org_id', $this->org_id)
       ->where('platform', 'twitter')->first();

       if(is_null($profile)){
           // Create Profile 
           $create_profile=new SocialProfiles; 
           $create_profile->org_id=$this->org_id; 
           $create_profile->platform='twitter'; 
           $create_profile->link='https://twitter.com/'.$this->twitterUpdated; 
           $create_profile->username=$this->twitterUpdated;
           $create_profile->save();

       }
       else{
           
               // Update Profile
               $update_profile=SocialProfiles::where('org_id', $this->org_id)
               ->where('platform', 'twitter')->update([
                'link'=>'https://twitter.com/'.$this->twitterUpdated, 
                'username'=>$this->twitterUpdated, 
   
               ]);
               
       }
 
    }
    
    public function updatedDribbbleUpdated(){
        $this->dribbble=$this->dribbbleUpdated;
        
        $profile=SocialProfiles::where('org_id', $this->org_id)
        ->where('platform', 'dribbble')->first();

        if(is_null($profile)){
            // Create Profile 
            $create_profile=new SocialProfiles; 
            $create_profile->org_id=$this->org_id; 
            $create_profile->platform='dribbble'; 
            $create_profile->link='https://dribbble.com/'.$this->dribbbleUpdated; 
            $create_profile->username=$this->dribbbleUpdated;
            $create_profile->save();

        }
        else{
            
                $update_profile=SocialProfiles::where('org_id', $this->org_id)
                ->where('platform', 'dribbble')->update([
                    'link'=>'https://dribbble.com/'.$this->dribbbleUpdated, 
                    'username'=>$this->dribbbleUpdated, 
    
                ]);

        }
 
    }
    public function updatedGithubUpdated(){
        $this->github=$this->githubUpdated;
       
       $profile=SocialProfiles::where('org_id', $this->org_id)
       ->where('platform', 'github')->first();

       if(is_null($profile)){
           // Create Profile 
           $create_profile=new SocialProfiles; 
           $create_profile->org_id=$this->org_id; 
           $create_profile->platform='github'; 
           $create_profile->link='https://github.com/'.$this->githubUpdated; 
           $create_profile->username=$this->githubUpdated;
           $create_profile->save();

       }
       else{
               // Update Profile
               $username=$this->githubUpdated; 
               $update_profile=SocialProfiles::where('org_id', $this->org_id)
               ->where('platform', 'github')->update([
                'link'=>'https://github.com/'.$username, 
                'username'=>$this->githubUpdated, 
               ]);
       }
 
    }

    public function updatedLinkedinUpdated(){
        $this->linkedin=$this->linkedinUpdated;

       $profile=SocialProfiles::where([
           ['org_id', $this->org_id], 
           ['platform', 'linkedin'],
        ])->first();

       if(is_null($profile)){
           // Create Profile 
           $create_profile=new SocialProfiles; 
           $create_profile->org_id=$this->org_id; 
           $create_profile->platform='linkedin'; 
           $create_profile->link='https://linkedin.com/company'.'/'.$this->linkedinUpdated;           
           $create_profile->username=$this->linkedinUpdated;
           $create_profile->save();

       }
       else{
               // Update Profile
               $update_profile=SocialProfiles::where('org_id', $this->org_id)
               ->where('platform', 'linkedin')->update([
                'link'=>'https://linkedin.com/company'.'/'.$this->linkedinUpdated,      
                'username'=>$this->linkedinUpdated, 
               ]);
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
        $inviteduser_role=$this->inviteduser_role;
       
        $name=getFirstName($name); 
        $email;     

        // $systemurl='https://eazibusiness.com';

        $systemurl=config("app.url");

        //build url
        $buldurl=$systemurl."/invitation".'/'.$current_user_id.'/'.$organization_id.'/'.$inviteduser_role;
        
        if (!is_null($inviteduser_role)) {

            //Store Invitation Details 
            $store_invitation=new UserInvitation;
            $store_invitation->user_id=$this->user->id;
            $store_invitation->org_id=$organization_id;
            $store_invitation->invited_name=$name;
            $store_invitation->invited_email=$email;
            $store_invitation->invited_role=$this->inviteduser_role; 
            $store_invitation->status='pending';
            $store_invitation->save();

            //Send invitation 
            Notification::route('mail', $email)->notify(new NewUserInvitationNotification($name, $email, $buldurl, $organization_name, $current_user_name));
  
            //Clear Invitation Data
            $this->StaffEmail='';
            $this->StaffName='';
            $this->inviteduser_role='';
        }

    }
    
    public function updatedCompanyName(){
                $update_details=OrgProfiles::where('id', $this->org_id)
                ->update(['org_name'=>$this->company_name]);
        }

    public function updatedCompanyEmail(){
            $update_details=OrgProfiles::where('id', $this->org_id)
            ->update(['org_email'=>$this->company_email]);
    }

    public function updatedCompanyAddress(){
        $update_details=OrgProfiles::where('id', $this->org_id)
        ->update(['org_address'=>$this->company_address]);
    }

    public function updatedCompanyCity(){
        $update_details=OrgProfiles::where('id', $this->org_id)->
        update(['org_city'=>$this->company_city]);
    }

    public function updatedCompanyCountry(){
        $update_details=OrgProfiles::where('id', $this->org_id)
        ->update(['org_country'=>$this->company_country]);
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
    $org=UserOrganizations::where('user_id', $this->user->id)->first();

    //Check for all details

    //Mark Account as Verified

    $complete_setup=User::find($this->user->id);
    $complete_setup->account_status='1';
    $complete_setup->save(); 

    //Proceed to dashboard
    return redirect('/dashboard'); 

}

}
