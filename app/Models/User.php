<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\RankCustomer;
use App\Models\Address;
use App\Models\Bill;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Role;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'email',
        'email_verified_at',
        'username',
        'password',
        'point',
        'phone_number',
        'rank_customer_id',
        'user_status_id',
        'role_id'
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


    public function rankCustomer()
    {
        return $this->belongsTo(RankCustomer::class, 'rank_customer_id');
    }

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }


        public function orders()
    {
        return $this->hasMany(Bill::class);}
    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }
}
