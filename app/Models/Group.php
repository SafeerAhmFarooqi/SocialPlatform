<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Group extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table="groups";

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'title',
        'location',
        'owner_id',
        'status',
        'created_by',
    ];

    public function members()
    {
        return $this->hasMany(GroupMembers::class, 'group_id');
    }

    public function posts()
    {
        return $this->hasMany(GroupPost::class, 'group_id');
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function isMember()
    {
        if (GroupMembers::where('group_id',$this->id)->where('member_id',Auth::user()->id)->where('status',true)->first()) {
            return true;
        } else {
            return false;
        }
        
    }

}
