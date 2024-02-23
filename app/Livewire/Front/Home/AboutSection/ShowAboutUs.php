<?php

namespace App\Livewire\Front\Home\AboutSection;

use App\Models\AboutMe;
use Livewire\Component;

class ShowAboutUs extends Component
{
    public function render()
    {
        $AboutMe = AboutMe::latest()->first();
        return view('livewire.front.home.about-section.show-about-us',compact('AboutMe'));
    }
}
