<?php

namespace App\Services\TaskDetail;

use App\DataTransferObjects\TaskDetailDto;
use App\Models\TaskDetail;

class TaskDetailService
{
    public function show(int $id): TaskDetail
    {
        return TaskDetail::findOrFail($id);
    }

    public function store(TaskDetailDto $taskDetailDto): TaskDetail
    {

        return TaskDetail::create([
            'title' => $taskDetailDto->title,
            'description' => $taskDetailDto->description,
            'status' => $taskDetailDto->status,
            'end_point' => $taskDetailDto->end_point,
        ]);
    }

    public function update(TaskDetail $taskDetail, TaskDetailDto $taskDetailDto): TaskDetail
    {

        return tap($taskDetail)->update([
            'title' => $taskDetailDto->title,
            'description' => $taskDetailDto->description,
            'status' => $taskDetailDto->status,
        ]);
    }

    public function delete(int $id): TaskDetail
    {
        $taskDetail = TaskDetail::findOrFail($id);

        return $taskDetail->delete();

    }
}
