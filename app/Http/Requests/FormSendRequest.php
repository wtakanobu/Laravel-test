<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormSendRequest extends FormRequest
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
            'name' => 'required|alpha',
            'level' => 'required|integer|between:1,99',
        ];
    }
    
    public function messages()
    {
        return [
            'name.required' => ':attribute くらいは入力しよか',
            'level.required' => ':attribute は必須やで',
            'level.integer' => ':attribute は整数にしよか',
            'level.between' => ':attribute は:min から:max までやで',
        ];
    }
    public function attributes()
    {
        return [
            'name' => '名前',
            'level' => 'レべル',
       ];
    }
    
}
