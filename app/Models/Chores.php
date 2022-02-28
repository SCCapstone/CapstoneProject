<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chores extends Model
{
    use HasFactory;

    protected $table = 'chores';
    protected $fillable = ['house_num', 'local_id'];
}
