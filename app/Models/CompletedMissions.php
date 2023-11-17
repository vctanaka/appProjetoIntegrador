<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompletedMissions extends Model
{
    use HasFactory;
    protected $table = 'completed_missions';
    protected $guarded = [];
}
