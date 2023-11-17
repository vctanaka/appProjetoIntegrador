<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompletedChallenges extends Model
{
    use HasFactory;
    protected $table = 'completed_challenges';
    protected $guarded = [];
}
