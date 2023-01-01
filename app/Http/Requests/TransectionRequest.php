<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class TransectionRequest extends FormRequest
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
            '_token'               => 'required',
            'is_yearly'            => 'required|boolean',
            'plan_id'              => 'required|integer',
            'billing_name'         => 'required|string',
            'billing_email'        => 'required|string',
            'billing_phone'        => 'required|string',
            'billing_address'      => 'required|string',
            'billing_city'         => 'required|string',
            'billing_state'        => 'required|string',
            'billing_zipcode'      => 'required|integer',
            'billing_country'      => 'required|string',
            'type'                 => 'required|string',
            'payment_gateway_id'   => 'required|integer',

        ];
        return $rules;
    }

    public function messages()
    {
        return [
           'is_yearly.required'   => 'Please select your plan type monthly/yearly',
           'plan_id.required'     => 'Please enter your plan',
           'billing_name'         => 'Please enter your name',
           'billing_email'        => 'Please enter your email',
           'billing_phone'        => 'Please enter your phone',
           'billing_address'      => 'Please enter your address',
           'billing_city'         => 'Please enter your city',
           'billing_state'        => 'Please enter your state',
           'billing_zipcode'      => 'Please enter your zipcode',
           'billing_country'      => 'Please enter your country',
           'type'                 => 'Please enter your plan type',
           'payment_gateway_id'   => 'Please enter your payment gateway',
        ];
    }


}
