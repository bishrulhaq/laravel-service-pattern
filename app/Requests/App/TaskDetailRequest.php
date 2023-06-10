<?php

namespace App\Requests\App;

use Illuminate\Foundation\Http\FormRequest;

class TaskDetailRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'max:90'],
            'description' => ['required', 'min:100'],
            'status' => ['required'],
            'end_point' => ['required'],
        ];
    }
}
