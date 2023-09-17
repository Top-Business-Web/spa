<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderUpdateRequest extends FormRequest
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
            'title' => 'required',
            'title_ar' => 'required',
            'description' => 'required',
            'description_ar' => 'required',
            'image' => 'nullable|mimes:jpg,png',
            'url' => 'required',
        ];
    }
}
