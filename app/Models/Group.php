<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $table="groups";

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
