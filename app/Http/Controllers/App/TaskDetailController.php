<?php

namespace App\Http\Controllers\App;

use App\Enums\TaskDetailEndPoint;
use App\Requests\App\TaskDetailRequest;
use App\Resources\App\TaskDetailResource;
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
            TaskDetailEndPoint::App
        );

        return TaskDetailResource::make(
            $task,
        );
    }
}
