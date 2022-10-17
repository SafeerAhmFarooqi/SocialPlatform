<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comments extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table="comments";

    protected $dates = ['deleted_at'];

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
        return $this->belongsTo(User::class, 'user_id')->withTrashed();
    }

    public function post()
    {
        return $this->belongsTo(Posts::class, 'post_id');
    }


}
