<?php

namespace App\Policies;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CommentPolicy
{
    use HandlesAuthorization;
    /**
     * Determine whether the user can view any models.
     */
    
    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Comment $comment)
    {
    return $user->id === $comment->user_id;
    }

    public function delete(User $user, Comment $comment)
{
    return $user->id === $comment->user_id;
}

}
