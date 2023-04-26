<?php

namespace App\Http\Requests;
use Illuminate\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class signupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
    
     */
    public function rules()
    {
        return [
            'name'=>'required|unique:foos,name',
            'age'=>'required|numeric',
            'data'=>'required',
            'phone'=>'required|numeric|max 10',
            'web'=>'required|string',
            'address'=>'required|string'
        ];
    }
    public function messages()
    {
        return [
            'name.unique'=>'kiểm tra lại',
            'age.numeric'=>'kiểm tra lại',
            'data.request'=>'kiểm tra lại',
            'phone.numeric'=>'kiểm tra lại',
            'web.string'=>'kiểm tra lại',
            'address.string'=>'kiểm tra lại'
        ];
    }
}
