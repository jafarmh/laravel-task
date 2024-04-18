<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddChangeRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {

        return [
            "email"=>['required',"string"],
            "amount"=>["required","numeric"],
            "currency_from"=>["required","exists:currencies,id"],
            "currency_to"=>["required","exists:currencies,id"],
         
           
        ];
    }
}
