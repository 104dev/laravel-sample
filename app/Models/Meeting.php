<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'participants',
    ];

    protected $casts = [
        'participants' => 'json',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
