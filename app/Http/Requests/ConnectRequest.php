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
            '_token'                => 'required',
            'name'          => 'required|string|max:50',
            'title'         => 'required|string|max:50',
            'email'         => 'required|email|max:50',
            'ccode'         => 'required|max:5',
            'phone'         => 'required|max:15',
            'company_name'  => 'nullable|string|max:50',
            'message'       => 'required|string|max:1024',
        ];
        return $rules;
    }

    public function messages()
    {
        return [
           'name.required'          => 'Please enter your name',
           'title.required'         => 'Please enter your title',
           'email.required'         => 'Please enter your email',
           'phone.required'         => 'Please enter your phone',
           'company_name.required'  => 'Please enter your company name',
           'message.required'       => 'Please enter your message',
        ];
    }


}
