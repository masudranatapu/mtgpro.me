<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class ChangePasswordRequest extends FormRequest
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
            '_token'                => 'required',
            'current_password'     => 'required',
            'confirm_password'     => 'required|min:8',
            'password'             => 'required|same:confirm_password|min:8',
        ];
        return $rules;
    }

    public function messages()
    {
        return [
           'current_password.required'=> 'Please enter current password',
           'confirm_password.required'=> 'Please enter confirm password',
           'password.required'      => 'Please enter your password',

        ];
    }


}
