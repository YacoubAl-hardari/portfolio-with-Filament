<?php

namespace App\Livewire\Front\Home\ServicesSection;

use App\Models\Service;
use Livewire\Component;

class ShowServices extends Component
{
    public function render()
    {
        $Services = Service::latest()->where('status',1)->get();
        return view('livewire.front.home.services-section.show-services',compact('Services'));
    }
}
