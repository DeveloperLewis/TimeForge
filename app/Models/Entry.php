<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    protected $fillable = ['name', 'project', 'reward_tier', 'time_performed', 'user_id'];
    protected $primaryKey = 'entry_id';

    use HasFactory;
}
