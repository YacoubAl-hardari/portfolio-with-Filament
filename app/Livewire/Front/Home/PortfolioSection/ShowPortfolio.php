<?php

namespace App\Livewire\Front\Home\PortfolioSection;

use App\Models\Project;
use Livewire\Component;
use App\Models\Category;

class ShowPortfolio extends Component
{
    public function render()
    {
        $Categories = Category::latest()->has('projects')->where('status',1)->get();
        $Projects = Project::latest()->with('categories')->where('status',1)->get();
        return view('livewire.front.home.portfolio-section.show-portfolio',compact('Categories','Projects'));
    }
}
