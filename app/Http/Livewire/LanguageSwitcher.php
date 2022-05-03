<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LanguageSwitcher extends Component
{
    public $lang;

    public function mount(){
        // $this->lang="LN";
    }

    public function render()
    {
        return view('livewire.language-switcher');

    }

    public function updatedLang(){
      
    }
}
