<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Comments extends Model
{
    use HasFactory;

    protected $table="comments";

    protected $fillable = [
        'user_id',
        'post_id',
        'comment',
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
        return $this->belongsTo(Posts::class, 'post_id');
    }


}
