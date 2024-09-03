<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    
    // Laravel Gravatar profile Image Request

    protected $appends = ['avatar'];

    public function getAvatarAttribute() {
        return "https://gravatar.com/avatar/" . md5( strtolower( trim( $this-> email) ) );
    }

    public function getImagePath()
    {
        return env('DOMAIN_URL') . Storage::url($this->photo_path);
    }

    public function cartItems()
    {
        return $this->hasMany(Cart::class,'customer_id');
    }

    public function getCartGrandTotal()
    {
        return Cart::grandTotal($this->id);
    }
}
