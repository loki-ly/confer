<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Discuss extends Model
{
    use HasFactory;
    protected $fillable = [
        'paper_id',
        'user_id',
        'name',
        'email',
        'comment',
        'created_at',
        'updated_at'
    ];
}
