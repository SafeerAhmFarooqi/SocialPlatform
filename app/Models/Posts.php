<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;

class Posts extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table="posts";

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'user_id',
        'type_id',
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

    public function comments()
    {
        return $this->hasMany(Comments::class, 'post_id');
    }

    public function groupName($id)
    {
        switch ($id) {
            case "1":
              return 'Armed Forces';
              break;
            case "2":
              return 'Police';
              break;
            case "3":
              return 'Fire';
              break;
            case "4":
                return 'THW';
                break;
            case "5":
                    return 'Paramedic';
                    break;
            default:
              return back();
          }
    }

}
