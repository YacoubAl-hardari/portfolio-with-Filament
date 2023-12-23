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
        $data['Hero'] = Hero::latest()->first();
        $data['AboutMe'] = AboutMe::latest()->first();
        $data['Services'] = Service::latest()->where('status',1)->get();
        $data['SkillsTeches'] = SkillsTeche::latest()->where('status',1)->get();
        $data['SkillsSoicals'] = SkillsSoical::latest()->where('status',1)->get();
        $data['Educations'] = Education::latest()->where('status',1)->get();
        $data['WorkExperiences'] = WorkExperience::latest()->where('status',1)->get();
        $data['Categories'] = Category::latest()->has('projects')->where('status',1)->get();
        $data['Projects'] = Project::latest()->with('categories')->where('status',1)->get();
        $data['Posts'] = Post::latest()->with('post_categories','users')->where('status',1)->get();
        $data['Clients'] = Client::latest()->get();
        $data['ContactUs'] = ContactUs::latest()->get();
        $data['SoicalMedais'] = SoicalMedai::latest()->first();
        return view('livewire.home.show-home-page',$data);
    }
}
