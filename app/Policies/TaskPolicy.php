<?php

namespace App\Policies;

use App\User;
use App\Task;
use Illuminate\Auth\Access\HandlesAuthorization;

class TaskPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the given user can delete the given task.
     *
     * @param  User  $user
     * @param  Task  $task
     * @return bool
     */
    public function destroy(User $user, Task $task)
    {
        return $user->id === $task->user_id;
    }

    /**
     * Determine if the given user can update the given task.
     *
     * @param  User  $user
     * @param  Task  $task
     * @return bool
     */
    public function update(User $user, Task $task)
    {
        return $user->id === $task->user_id;
    }
}
