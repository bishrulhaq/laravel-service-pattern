<?php

namespace App\DataTransferObjects;

use App\Enums\TaskDetailEndPoint;
use App\Requests\Api\TaskDetailRequest as ApiTaskDetailRequest;
use App\Requests\App\TaskDetailRequest as AppTaskDetailRequest;

class TaskDetailDto
{

    public function __construct(
        public readonly string $title,
        public readonly string $description,
        public readonly string $status,
        public readonly TaskDetailEndPoint $end_point,
    )
    {

    }

    public static function fromApiRequest(ApiTaskDetailRequest $request): TaskDetailDto
    {
        return new self(
            $request->validated()['title'],
            $request->validated()['description'],
            $request->validated()['status'],
            TaskDetailEndPoint::Api
        );
    }

    public static function fromAppRequest(AppTaskDetailRequest $request): TaskDetailDto
    {
        return new self(
            $request->validated()['title'],
            $request->validated()['description'],
            $request->validated()['status'],
            TaskDetailEndPoint::App
        );
    }

}
