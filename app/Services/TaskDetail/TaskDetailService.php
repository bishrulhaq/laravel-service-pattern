<?php

namespace App\Services\TaskDetail;

use App\Enums\TaskDetailEndPoint;
use App\Models\TaskDetail;

class TaskDetailService
{
    public function store(string $title, string $description, string $status, TaskDetailEndPoint $taskDetailEndPoint)
    {

        return TaskDetail::create([
            'title' => $title,
            'description' => $description,
            'status' => $status,
            'end_point' => $taskDetailEndPoint,
        ]);
    }
}
