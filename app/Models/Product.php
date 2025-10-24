<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'user_id', // ✅ tambahkan ini
    ];

    // Relasi ke user (opsional, tapi disarankan)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function mitra()
{
    return $this->belongsTo(User::class, 'mitra_id');
}

}
