<?php

namespace App\Livewire\Front\Home\ExperinceSection;

use Livewire\Component;
use App\Models\Education;
use App\Models\WorkExperience;

class ShowExperince extends Component
{
    public function render()
    {    
        $Educations = Education::latest()->where('status',1)->get();
        $WorkExperiences = WorkExperience::latest()->where('status',1)->get();
        return view('livewire.front.home.experince-section.show-experince',compact('Educations','WorkExperiences'));
    }
}
