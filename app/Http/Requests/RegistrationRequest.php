<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
            // 'name'                  => 'required',
            'email'                 => 'required|email',
            'is_agree'              => 'required',
            'password'              => 'min:6|required_with:confirm_password|same:confirm_password',
            'confirm_password'      => 'required|min:6'
        ];
        return $rules;
    }

    public function messages()
    {
        return [
        //    'name.required'          => 'Please Enter Your Name',
           'email.required'         => 'Please Enter Your Email',
           'password.required'      => 'Please Enter Your Password',
           'is_agree.required'      => 'This field is required',

        ];
    }


}
