<?php

namespace App\Models;

class Account extends Model
{
    public function users()
    {
        return $this->belongsToMany(
            User::class,
            'account_users',
            'account_id',
            'user_id'
        );
    }
}
