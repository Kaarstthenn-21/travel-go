<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CommentSection extends Component
{
    public $tripId;
    public $comments;

    /**
     * Create a new component instance.
     *
     * @param int $tripId
     * @param \Illuminate\Database\Eloquent\Collection $comments
     */
    public function __construct($tripId, $comments)
    {
        $this->tripId = $tripId;
        $this->comments = $comments;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('components.comment-section');
    }
}