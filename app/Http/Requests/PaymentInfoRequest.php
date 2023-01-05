<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class PaymentInfoRequest extends FormRequest
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
            'card_number'           => 'required|max:20',
            'card_expiration_date'  => 'required|date',
            'card_cvc'              => 'required|min:3|max:4',
            'name_on_card'          => 'required|max:255',
        ];
        return $rules;
    }

    public function messages()
    {
        return [
           'card_number.required'      => 'Please enter your card number',
           'card_expiration_date.required'      => 'Please enter your card expiration date',
           'card_cvc.required'      => 'Please enter your card cvc',
           'name_on_card.required'      => 'Please enter your name on card'
        ];
    }


}
