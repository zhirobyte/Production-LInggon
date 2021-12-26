<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */

    // // ini adalah model untuk user 
    // model user ini harus berbeda antara penggunaan
    // username dan name berstatus berbeda, entah dari googlenya
    // yang memiliki limit penggunaan variable "username"

    protected $fillable = [
        'role',
        'name',
        'password',
        'google_id',
        'email',
        'gender',
        'birth_date',
        'profession',
        'address',
        'province',
        'city',
        'district',
        'zip_code',
        'instagram',
        'phone',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
