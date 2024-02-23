<?php

namespace App\Livewire\Front\Home\BlogSection;

use App\Models\Post;
use Livewire\Component;

class ShowBlogs extends Component
{
    public function render()
    {
        $Posts = Post::latest()->with('post_categories','users')->where('status',1)->get();
        return view('livewire.front.home.blog-section.show-blogs',compact('Posts'));
    }
}
