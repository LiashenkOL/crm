<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTasksRequest extends StoreTasksRequest
{
    public function rules(): array
    {
        return [
            'name' => 'nullable|string|max:255',
            'is_completed' => 'sometimes|boolean',
        ];
    }
}
