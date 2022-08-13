<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Followers extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'date_followed',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
