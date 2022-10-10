<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class GroupComment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'group_id',
        'post_id',
        'comment',
        'status',
    ];

    protected static function booted()
    {
        static::creating(function ($comment) {
            $comment->user_id = Auth::user()->id;
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function post()
    {
        return $this->belongsTo(GroupPost::class, 'post_id');
    }
}
