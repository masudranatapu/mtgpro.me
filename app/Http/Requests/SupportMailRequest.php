<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class SupportMailRequest extends FormRequest
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
            'subject'              => 'required',
            'message'              => 'required',

        ];
        return $rules;
    }

    public function messages()
    {
        return [
           'subject.required'      => 'Please enter your subject',
           'message.required'      => 'Please enter your message',
        ];
    }


}
