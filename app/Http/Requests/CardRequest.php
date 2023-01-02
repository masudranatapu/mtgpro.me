<?php
namespace App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Http\FormRequest;

class CardRequest extends FormRequest
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
            'card_for'         => 'required|string|max:124',
            'bgcolor'          => 'required|string|max:25',
            'name'             => 'required|string|max:124',
            'location'         => 'required|string|max:124',
            'designation'      => 'required|string|max:124',
            'company_name'     => 'required|string|max:124',
            'bio'              => 'nullable|string|max:255',
            'card_url'         => 'required|unique:business_cards,card_url|string|max:124',
            'profile_pic'      => 'nullable|mimes:jpeg,jpg,png,webp,gif | max:10000',
            'cover_pic'        => 'nullable|mimes:jpeg,jpg,png,webp,gif | max:10000',
            'company_logo'     => 'nullable|mimes:jpeg,jpg,png,webp,gif | max:10000'
        ];
        $social_icon = DB::table('social_icon')->get();
        if($social_icon){
            foreach ($social_icon as $key => $value) {
                $rules[$value->icon_name.'.*'] = 'nullable|string|max:224';
            }
        }
        return $rules;
    }

    public function messages()
    {
        return [
            'card_for.required'     => 'This field is required',
            'bgcolor.required'      => 'This field is required',
            'name.required'         => 'This field is required',
            'location.required'     => 'This field is required',
            'designation.required'  => 'This field is required',
            'company_name.required' => 'This field is required',
            'email.required'        => 'This field is required',
        ];
    }
}
