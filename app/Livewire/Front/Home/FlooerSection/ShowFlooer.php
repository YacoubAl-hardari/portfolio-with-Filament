<?php

namespace App\Livewire\Front\Home\FlooerSection;

use Livewire\Component;
use App\Models\ContactUs;
use App\Models\SoicalMedai;
use App\Models\ContactUsForm;
use App\Mail\ContactFormSubmitted;
use Illuminate\Support\Facades\Mail;

class ShowFlooer extends Component
{

    public $name;
    public $last_name;
    public $email;
    public $message;

    protected $rules = [
        'name' => 'required',
        'last_name' => 'required',
        'email' => 'required|email',
        'message' => 'required',
    ];

    public function submitForm()
    {
        $this->validate();

        // Save form data to database if needed
        ContactUsForm::create([
            'name' => $this->name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'message' => $this->message,
        ]);

        // Add logic to send email...
        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactFormSubmitted($this->name, $this->last_name, $this->email, $this->message));

        // Optionally, you can clear the form fields after submission
        $this->reset(['name', 'last_name', 'email', 'message']);

        // Optionally, you can emit an event to notify the parent component or perform any other action
        $this->emit('formSubmitted');
    }

    public function render()
    {
        $SoicalMedais = SoicalMedai::latest()->get() ;
        $ContactUs = ContactUs::latest()->get() ;
        return view('livewire.front.home.flooer-section.show-flooer',compact('SoicalMedais','ContactUs'));
    }
}
