<?php

namespace App\Http\Controllers\App;

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
            'end_point' => TaskDetailEndPoint::App,
        ]);

        return response()->json([
            'task' => $task,
        ]);
    }
}
