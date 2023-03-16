<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class CheckoutRequest extends FormRequest
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
            // '_token'               => 'required',
            'is_yearly'            => 'required|boolean',
            'plan_id'              => 'required|integer',
        ];
        return $rules;
    }

    public function messages()
    {
        return [
           'is_yearly.required'         => 'Please select your plan type',
           'plan_id.required'      => 'Please select your plan',
        ];
    }


}
