<?php

namespace App\Http\Controllers\Api\V1;

use App\Enums\TaskDetailEndPoint;
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

    public function store(TaskDetailRequest $request): TaskDetailResource
    {

        $task = $this->service->store(
            $request->get('title'),
            $request->get('description'),
            $request->get('status'),
            TaskDetailEndPoint::Api
        );

        return TaskDetailResource::make(
            $task,
        );

    }
}
