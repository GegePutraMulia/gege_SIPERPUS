<?php


namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Database\Factories\UserFactory;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable, HasRoles;
    protected $fillable = [
        'username', 'name', 'email', 'password', 'email_verified_at'
    ];
    
    protected $hidden = [
        'password', 'remember_token',
    ];
}
