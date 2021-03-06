<?php

namespace App\Policies;

use App\Models\User;
use TeamTeaTime\Forum\Models\Thread;

class UserThreadPolicy
{
    public function view($user, Thread $thread): bool
    {
        return true;
    }

    public function deletePosts($user, Thread $thread): bool
    {
        return true;
    }

    public function restorePosts($user, Thread $thread): bool
    {
        return true;
    }

    public function rename($user, Thread $thread): bool
    {
        return ($user->getKey() === $thread->author_id)
            || ($user->role === "director");
    }

    public function reply($user, Thread $thread): bool
    {
        return ! $thread->locked;
    }

    public function delete($user, Thread $thread): bool
    {
        return ($user->getKey() === $thread->author_id)
            || ($user->role === "director");
    }

    public function restore($user, Thread $thread): bool
    {
        return $user->getKey() === $thread->author_id;
    }
}
