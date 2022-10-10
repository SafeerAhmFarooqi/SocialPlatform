<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class GroupPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'group_id',
        'post_text',
        'image_path',
        'status',
    ];

    protected static function booted()
    {
        static::creating(function ($post) {
            $post->user_id = Auth::user()->id;
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function groupComments()
    {
        return $this->hasMany(GroupComment::class, 'post_id');
    }
}
