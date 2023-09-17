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
            'logo' => 'nullable|mimes:jpg',
            'title' => 'required',
            'title_ar' => 'required',
            'address' => 'required',
            'address_ar' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'work_hours' => 'required',
            'map' => 'required',
            'social_links' => 'required',
        ];
    }
}
