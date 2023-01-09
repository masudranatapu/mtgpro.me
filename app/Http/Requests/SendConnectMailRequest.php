<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class SendConnectMailRequest extends FormRequest
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
            '_token'      => 'required',
            'email'     => 'required|email|max:124',
            'subject'        => 'required|string|max:124',
            'message'        => 'required|string|max:1024',
        ];
        return $rules;
    }

    public function messages()
    {
        return [
           'email.required'         => 'Please enter your email',
           'subject.required'       => 'Please enter your subject',
           'message.required'          => 'Please enter your message',
        ];
    }


}
