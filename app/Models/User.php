<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role', // mitra / pembeli / admin
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // 🔗 Relasi: satu user (mitra) bisa punya banyak produk
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    // 🛠️ Fungsi bantu untuk cek role
    public function isMitra()
    {
        return $this->role === 'mitra';
    }

    public function isPembeli()
    {
        return $this->role === 'pembeli';
    }

    public function isAdmin()
    {
        return $this->role === 'admin';
    }
}
