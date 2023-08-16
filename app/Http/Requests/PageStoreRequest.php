<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PageStoreRequest extends FormRequest
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
            'top_title' => 'required',
            'top_title_ar' => 'required',
            'top_description' => 'required',
            'top_description_ar' => 'required',
            'down_title' => 'required',
            'down_title_ar' => 'required',
            'down_description' => 'required',
            'down_description_ar' => 'required',
            'category_id' => 'required'
        ];
    }
}
