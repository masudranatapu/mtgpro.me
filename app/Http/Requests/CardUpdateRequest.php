<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Http\FormRequest;

class CardUpdateRequest extends FormRequest
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
        $rules = [
            'card_for'              => 'required|string|max:124',
            'bgcolor'               => 'required|string|max:25',
            'name'                  => 'required|string|max:124',
            'location'              => 'required|string|max:124',
            'designation'           => 'required|string|max:124',
            'company_name'          => 'nullable|string|max:124',
            // 'card_url'  => 'required|unique:users,email|string|max:124',
            'bio'                   => 'nullable|string|max:255',

        ];


        return $rules;
    }

    public function messages()
    {
        return [
            'card_for.required'   => 'This field is required',
            'bgcolor.required'    => 'This field is required',
            'name.required'    => 'This field is required',
            'location.required'  => 'This field is required',
            'designation.required'        => 'This field is required',
            'card_url.required' => 'This field is required',
            'company_name.required' => 'This field is required',
            'bio.required'        => 'This field is required',
        ];
    }
}
