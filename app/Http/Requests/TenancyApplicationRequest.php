<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TenancyApplicationRequest extends FormRequest
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
            'cnic' => 'required',
            'cnic_image' => 'required|image',
            'contact_number' => 'required'
        ];
    }
}