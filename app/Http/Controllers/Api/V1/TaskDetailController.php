<?php

namespace App\Http\Controllers\Api\V1;

use App\Enums\TaskDetailEndPoint;
use App\Models\TaskDetail;
use Illuminate\Http\Request;

class TaskDetailController
{
    public function store(Request $request)
    {

        $task = TaskDetail::create([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'status' => $request->get('status'),
            'end_point' => TaskDetailEndPoint::Api,
        ]);

        return response()->json([
            'task' => $task,
        ]);
    }
}
