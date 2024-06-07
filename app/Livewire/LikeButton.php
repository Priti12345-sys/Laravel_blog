<?php

namespace App\Livewire;

use Livewire\Component;

class LikeButton extends Component
{
    public $likes = 0;

    public function mount($initialLikes)
    {
        $this->likes = $initialLikes;
    }

    public function like()
    {
        $this->likes++;
        // Optionally, save the like count to the database
    }

    public function render()
    {
        return view('livewire.like-button');
    }
}
