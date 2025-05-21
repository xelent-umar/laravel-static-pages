<?php

namespace XelentUmar\StaticPages\Http\Requests\OPD;

use XelentUmar\StaticPages\Models\Accounts\ChartOfAccount;
use Illuminate\Foundation\Http\FormRequest;

class GlassRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'name' => 'required|string|max:255',
            'slug' => 'required',
            'description' => 'nullable|string',
            'logo' => 'nullable|string',
            'status' => 'nullable|string',
        ];

        return $rules;
    }
}
