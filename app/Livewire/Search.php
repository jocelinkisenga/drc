<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class Search extends Component
{
    public  $keyword = "";


    public function render()
    {
        $results = [];
        if(strlen($this->keyword) >= 1){
            $results = Post::where("title","like","%".$this->keyword."%")->limit(3)->get();
        }
        return view('livewire.search', ["searchPosts" => $results]);
    }
}
