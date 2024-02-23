<?php

namespace App\Livewire\Home;

use App\Models\AboutMe;
use App\Models\Category;
use App\Models\Client;
use App\Models\ContactUs;
use App\Models\Education;
use App\Models\Hero;
use App\Models\Post;
use App\Models\PostCategorie;
use App\Models\Project;
use App\Models\Service;
use App\Models\SkillsSoical;
use App\Models\SkillsTeche;
use App\Models\SoicalMedai;
use App\Models\WorkExperience;
use Livewire\Component;

class ShowHomePage extends Component
{
    public function render()
    {
        $data = [];
       
      
     
  

   
    
     
        $data['ContactUs'] = ContactUs::latest()->get();
        $data['SoicalMedais'] = SoicalMedai::latest()->first();
        return view('livewire.home.show-home-page',$data);
    }
}
