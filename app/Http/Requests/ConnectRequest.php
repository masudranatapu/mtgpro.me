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
            'job_title'   => 'nullable|string|max:124',
            'company'     => 'required|string|max:124',
            'note'        => 'required|string|max:1024',
        ];
        return $rules;
    }

    public function messages()
    {
        return [
           'card_id.required'       => 'Please enter your card',
           'name.required'          => 'Please enter your name',
           'email.required'         => 'Please enter your email',
           'job_title.required'     => 'Please enter your job title',
           'company.required'       => 'Please enter your company name',
           'note.required'          => 'Please enter your message',
        ];
    }


}
