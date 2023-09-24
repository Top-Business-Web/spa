<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutUsUpdateRequest extends FormRequest
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
            'images.*' => 'nullable',
            'images' => 'array|between:2,2',
            'top_image' => 'nullable',
            'top_title' => 'required',
            'down_title' => 'required',
            'top_description' => 'required',
            'down_description' => 'required',
            'year' => 'required',
        ];
    }
}
