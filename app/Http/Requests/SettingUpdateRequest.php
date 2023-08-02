<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingUpdateRequest extends FormRequest
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
            'logo' => 'required|mimes:jpg',
            'title' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'work_hours' => 'required',
            'map' => 'required',
            'social_links' => 'required',
        ];
    }
}
