<?php

namespace App\Http\Requests;

use App\Helpers\DateHelper;
use Illuminate\Foundation\Http\FormRequest;

class Client extends FormRequest
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
            'title' => 'required|max:255',
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'dob' => sprintf("required|date|date_format:Y-m-d|before:%s", DateHelper::getMinDate()),
            'email' => 'email:rfc,dns',
            'phone' => 'required|numeric|min:11', // |phone_number
            'address1' => 'required|max:255',
            'address2' => 'max:255',
            'city' => 'required|max:255',
            'state' => 'max:255',
            'zip' => 'required|max:12',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'A title is required',
            'body.required'  => 'A message is required',
        ];
    }

    public function validate(array $rules = [], $params = [])
    {
        parent::validate($this->rules(), $params);
    }
}
