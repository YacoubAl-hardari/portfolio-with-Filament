<?php

namespace App\Livewire\Front\Home\ClientSection;

use App\Models\Client;
use Livewire\Component;

class ShowClients extends Component
{
    public function render()
    {
        $Clients = Client::latest()->get();
        return view('livewire.front.home.client-section.show-clients',compact('Clients'));
    }
}
