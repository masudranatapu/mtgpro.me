<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class ConnectRequest extends FormRequest
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
            'card_id'     => 'required|string|max:124',
            'name'        => 'required|string|max:124',
            'email'       => 'required|email|max:150',
            'phone'       => 'required|max:20',
            'title'       => 'nullable|string|max:124',
            'company_name'=> 'nullable|string|max:124',
            'message'     => 'required|string|max:1024',
        ];
        return $rules;
    }

    public function messages()
    {
        return [
           'card_id.required'       => 'Please enter your card',
           'name.required'          => 'Please enter your name',
           'email.required'         => 'Please enter your email',
        //    'title.required'         => 'Please enter your job title',
        //    'company.required'       => 'Please enter your company name',
           'message.required'          => 'Please enter your message',
        ];
    }


}
