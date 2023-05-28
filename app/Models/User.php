<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
    ];

    //ターゲットからフォロワーを呼び出すとき
    public function followed()
    {
        return $this->belongsToMany(self::class, "follow", "followed_id", "following_id")->withPivot(
            'follow',
            'created_at',
            'unfollow_at'
        );
    }

    //フォロワーからターゲットを呼び出すとき
    public function following()
    {
        return $this->belongsToMany(self::class, "follow", "following_id", "followed_id")->withPivot(
            'follow',
            'created_at',
            'unfollow_at'
        );
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function meetings()
    {
        return $this->belongsToMany(Meeting::class);
    }
}
