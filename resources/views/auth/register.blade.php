<x-neptune-auth-layout>
<x-slot name='title'> Register </x-slot>



<p class="auth-description">Create your free account!<br>Enjoy 14-day free trial.</p>


        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <label for="Name" class="mb-2">{{__('Enter full name')}}</label>
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" placeholder='Name' required autofocus autocomplete="name" />
            </div>

            <div class="form-group mt-2 mb-2">
                <label for="Email" class="mb-2 mt-2">Enter valid business email address </label>
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="Email" required />
            </div>

            <div class="form-gorup mt-2 mb-2">
              <label for="password" class="mt-2 mb-2">Enter a secure password</label>  
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" placeholder="Password" required autocomplete="new-password" />
            </div>

            <div class="form-group mt-2 mb-2">
<label for="password_confirmation" class="mt-2 mb-2">Confirm password</label>
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" placeholder='Password Confirmation' required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif
            <div class="auth-forgot-password float-end form-group mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                
            </div>
                <div class="auth-submit mt-4"><x-jet-button>
                    {{ __('Register') }}
                </x-jet-button>
            </div>
            
        </form>
 

</x-neptune-auth-layout>