<?php

namespace App;
   use Illuminate\Notifications\Notifiable;
    use Illuminate\Foundation\Auth\User as Authenticatable;

 class Bloodcenter extends Authenticatable
    {
        use Notifiable;

        protected $guard = 'bloodcenter';

        protected $fillable = [
            'email', 'phoneno',
        ];

    }
