<?php
namespace App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Http\FormRequest;

class FirstCardRequest extends FormRequest
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
            'name'            => 'required|string|max:124',//
            'phone_number'          => 'required|string|max:20',//
            'designation'            => 'required|email|max:124',//
            'company_name'             => 'required|string|max:124',//
        ];
        return $rules;
    }

    public function messages()
    {
        return [
            'name.required'   => 'This field is required',
            'phone_number.required'    => 'This field is required',
            'designation.required'      => 'This field is required',
            'company_name.required'    => 'This field is required',
        ];
    }
}
