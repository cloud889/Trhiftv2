<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class LoadMorePostsData extends Component
{
    public $limitPerPage = 2;
    protected $listeners = [
        'load-more' => 'loadMore'
    ];
   
    public function loadMore()
    {
        $this->limitPerPage += 2;
    }
    public function render()
    {
        $posts = Post::latest()->paginate($this->limitPerPage);
        return view('livewire.load-more-posts-data',['posts' => $posts]);
    }
}
