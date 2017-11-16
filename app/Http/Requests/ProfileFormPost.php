<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileFormPost extends FormRequest
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
        return [

            'user_id' => 'required',
            'first_name' => 'required|max:100',
            'last_name' => 'required|max:100',
            'profession' => 'required|max:100',
            'date_of_birth' => 'required|date',
            'country' => 'required|max:100',
            'email' => 'required|max:20',
            'cell_num' => 'required',
            'phone_num' => 'required',
            'profile_pic' => 'required',

        ];
    }
}
