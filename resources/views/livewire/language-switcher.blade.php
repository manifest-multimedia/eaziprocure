<div>
    {{-- In work, do what you enjoy. --}}
       <!-- Language Changer-->
        {{--
    <select  wire:model="lang" name="language" id="language">
                    
        <option value="English" {{  app()->getLocale() === "en" ? "selected": "" }}>{{__('English')}} {{$lang}}</option>
        <option value="French" {{ $ app()->getLocale() === "fr" ? "selected": ""}}>{{__('French')}} {{$lang}}</option>
        <option value="Arabic">Arabic</option> 
    </select>--}}
    <div class="dropdown" id="language">
      <button class="btn btn btn-lg dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{__('Language')}}
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="/language/en">{{__('English')}}</a>
        <a class="dropdown-item" href="/language/fr">{{__('French')}}</a>
        {{-- <a class="dropdown-item" href="#">Something else here</a> --}}
      </div>
    </div>
</div>
