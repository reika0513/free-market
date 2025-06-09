<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PurchaseRequest extends FormRequest
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
        'pay' => ['required'],
        'address' => ['required'],
        ];
    }

    public function messages(){
        return [
            'pay.required' => '支払い方法を選択してください',
            'address.required' => '住所を設定してください',
        ];
    }
}
