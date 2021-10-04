<?php

namespace App\Policies;

use App\Models\User;
use TeamTeaTime\Forum\Models\Post;

class UserPostPolicy
{
    public function edit($user, Post $post): bool
    {
        return $user->getKey() === $post->author_id;
    }

    public function delete($user, Post $post): bool
    {
        return $user->getKey() === $post->author_id;
    }

    public function restore($user, Post $post): bool
    {
        return $user->getKey() === $post->author_id;
    }
}
