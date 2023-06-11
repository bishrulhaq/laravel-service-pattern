<?php

namespace App\Http\Controllers\Api\V1;

use App\DataTransferObjects\TaskDetailDto;
use App\Models\TaskDetail;
use App\Requests\Api\TaskDetailRequest;
use App\Resources\Api\TaskDetailResource;
use App\Services\TaskDetail\TaskDetailService;

class TaskDetailController
{
    protected $service;

    public function __construct(TaskDetailService $service)
    {
        $this->service = $service;
    }

    public function show(int $id): TaskDetailResource
    {

        $task = $this->service->show(
            $id
        );

        return TaskDetailResource::make(
            $task,
        );
    }

    public function store(TaskDetailRequest $request): TaskDetailResource
    {

        $task = $this->service->store(
            TaskDetailDto::fromApiRequest($request)
        );

        return TaskDetailResource::make(
            $task,
        );

    }

    public function update(TaskDetailRequest $request, TaskDetail $taskDetail): TaskDetailResource
    {

        $task = $this->service->update(
            $taskDetail,
            TaskDetailDto::fromApiRequest($request)
        );

        return TaskDetailResource::make(
            $task,
        );

    }

    public function delete(int $id): TaskDetailResource
    {

        $task = $this->service->delete(
            $id
        );

        return TaskDetailResource::make(
            $task,
        );

    }
}
