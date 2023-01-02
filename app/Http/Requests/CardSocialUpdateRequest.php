<?php
namespace App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Http\FormRequest;

class CardSocialUpdateRequest extends FormRequest
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
        $rules = [];

        if ($this->attributes->get('status') == 1 || $this->attributes->get('status') == 0) {
            $rules['status'] = 'required';
        }else
        {
            $rules = [
                'content'           => 'required|string|max:124',
                'label'             => 'required|string|max:124',
                'logo'              => 'file|mimes:jpeg,jpg,png,webp | max:1000',
            ];
        }


        return $rules;
    }

    public function messages()
    {
        return [
            'first_name.required'   => 'This field is required',
            'last_name.required'    => 'This field is required',
            'profile.required'      => 'This field is required',
            'card_name.required'    => 'This field is required',
        ];
    }
}
