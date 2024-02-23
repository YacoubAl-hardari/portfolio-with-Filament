<?php

namespace App\Livewire\Front\PostDetails;

use App\Models\Post;
use Livewire\Component;

class ShowPostDetails extends Component
{
    public $post;

    public function mount($slug)
    {
        // Fetch the post based on the slug
        $this->post = Post::where('url', $slug)->where('status', 1)->firstOrFail();
    }

    public function render()
    {
        // Render the view with the fetched post
        return view('livewire.front.post-details.show-post-details', ['post' => $this->post]);
    }
}
