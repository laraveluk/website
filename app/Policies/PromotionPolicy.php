<?php

namespace App\Policies;

use App\Models\Promotion;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PromotionPolicy
{
    use HandlesAuthorization;

    public function update(User $user, Promotion $promotion)
    {
        if($user->id == $promotion->user_id) {
            return true;
        }

        return false;
    }

    public function delete(User $user, Promotion $promotion)
    {
        if($user->id == $promotion->user_id) {
            return true;
        }

        return false;
    }
}
