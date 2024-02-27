<?php

namespace App\Livewire\Front\Home\HeroSection;

use App\Models\Hero;
use Livewire\Component;
use App\Models\SoicalMedai;

class ShowHero extends Component
{
    public function render()
    {
        $Hero = Hero::latest()->first();
        $SoicalMedais= SoicalMedai::latest()->first();
        return view('livewire.front.home.hero-section.show-hero',compact('Hero','SoicalMedais'));
    }
}
