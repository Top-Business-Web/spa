<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'image' => 'sometimes|mimes:png,jpg',
            'title' => 'required',
            'title_ar' => 'required',
            'description' => 'required',
            'description_ar' => 'required',
            'view' => 'required',
            'top' => 'required',
            'service_id' => 'required',
        ];
    }
}
