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
        $rules = [];

        // if ($this->attributes->get('video_type') == 'file') {
        //     $rules['video_file'] = 'file|mimes:mp4,m4v,avi,mov,mpg,mpeg,webm|max:1999';
        // }

        $rules = [
            'first_name'            => 'required|string|max:124',//
            'last_name'             => 'required|string|max:124',//
            'phone_number'          => 'required|string|max:20',//
            'card_email'            => 'required|email|max:124',//
            // 'upload_logo_url'       => 'image|mimes:jpg,jpeg,png,gif|max:3048',
            // 'upload_image_url'      => 'image|mimes:jpg,jpeg,png,gif|max:3048',
            'card_name'             => 'required|string|max:124',//
            'designation'           => 'nullable|string|max:124',//
            'personalized_link'     => 'required|unique:users,email|string|max:124',//
            'company_name'          => 'nullable|string|max:124',//
            'ccode'                 => 'required|string|max:8',//

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
            'first_name.required'   => 'This field is required',
            'last_name.required'    => 'This field is required',
            'profile.required'      => 'This field is required',
            'card_name.required'    => 'This field is required',
            'upload_logo_url.required'         => 'This field is required',
            'upload_image_url.required'         => 'This field is required',
            'designation.required'  => 'This field is required',
            'phone.required'        => 'This field is required',
            'email.required'        => 'This field is required',
            'personalized_link.required' => 'This field is required',
            'company_name.required' => 'This field is required',
            'ccode.required'        => 'This field is required',
        ];
    }
}
