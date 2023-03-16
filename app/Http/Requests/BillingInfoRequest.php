<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class BillingInfoRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            '_token'                => 'required',
            'billing_email'         => 'required|max:124',
            'billing_country'       => 'required',
            'billing_zipcode'       => 'required',
        ];
        return $rules;
    }

    public function messages()
    {
        return [
           'billing_email.required'      => 'Please enter your billing email',
           'billing_country.required'      => 'Please enter your billing country',
           'billing_zipcode.required'      => 'Please enter your billing zipcode',
        ];
    }


}
