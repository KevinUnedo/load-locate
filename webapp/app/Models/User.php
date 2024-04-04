<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Route;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'name',
        'phone_number',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function getLinks(): array
    {
        $baseUri = '/api/users/' . $this->id;
        $itemsUri = null;

        // Check if the 'items.index' route is defined
        if (Route::has('items.index')) {
            // Use route() to generate the URI for the 'items.index' route
            $itemsUri = route('items.index', ['user_id' => $this->id]);
        }

        return [
            'self' => [
                'href' => $baseUri,
                'method' => 'GET',
                'type' => 'application/json',
                'description' => 'Get this user',
            ],
            'update' => [
                'href' => $baseUri,
                'method' => 'PATCH',
                'type' => 'application/json',
                'description' => 'Update this user',
            ],
            'items' => [
                'href' => $itemsUri,
                'method' => 'GET',
                'type' => 'application/json',
                'description' => 'Get items associated with this user',
            ],
        ];
    }
}
