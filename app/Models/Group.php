<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
        'group_status',
        'created_by',
    ];

    public function members()
    {
        return $this->hasMany(GroupMembers::class, 'group_id');
    }

}
