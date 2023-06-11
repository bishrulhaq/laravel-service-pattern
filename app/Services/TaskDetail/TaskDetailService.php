<?php

namespace App\Services\TaskDetail;

use App\Enums\TaskDetailEndPoint;
use App\Models\TaskDetail;

class TaskDetailService
{
    public function show(string $id): TaskDetail
    {
        return TaskDetail::findOrFail($id);
    }

    public function store(string $title, string $description, string $status, TaskDetailEndPoint $taskDetailEndPoint): TaskDetail
    {

        return TaskDetail::create([
            'title' => $title,
            'description' => $description,
            'status' => $status,
            'end_point' => $taskDetailEndPoint,
        ]);
    }

    public function update(TaskDetail $taskDetail, string $title, string $description, string $status): TaskDetail
    {

        return tap($taskDetail)->update([
            'title' => $title,
            'description' => $description,
            'status' => $status,
        ]);
    }

    public function delete(int $id): TaskDetail
    {
        $taskDetail = TaskDetail::findOrFail($id);

        return $taskDetail->delete();

    }
}
