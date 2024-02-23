<?php

namespace App\Livewire\Front\Home\SkillsSection;

use Livewire\Component;
use App\Models\SkillsTeche;
use App\Models\SkillsSoical;

class ShowSkills extends Component
{
    public function render()
    {
        $SkillsTeches= SkillsTeche::latest()->where('status',1)->get();
        $SkillsSoicals = SkillsSoical::latest()->where('status',1)->get();
        return view('livewire.front.home.skills-section.show-skills',compact('SkillsTeches','SkillsSoicals'));
    }
}
