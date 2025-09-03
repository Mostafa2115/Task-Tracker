<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Task extends Model
{
    /** @use HasFactory<\Database\Factories\TaskFactory> */

    protected $fillable = ['title', 'due_date', 'description', 'priority', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
