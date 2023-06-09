<?php

namespace App\Models;

use App\Enums\TaskDetailEndPoint;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskDetail extends Model
{
    use HasFactory;

    protected $casts = [
        'end_point' => TaskDetailEndPoint::class,
    ];
}
