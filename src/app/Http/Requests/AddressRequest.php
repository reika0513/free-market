<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest
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
        'image' => ['required'],
        'name' => ['required'],
        'post' => ['required', 'max:8'],
        'address' => ['required'],
        'building' => ['required'],
        ];
    }

    public function messages(){
        return [
            'image.required' => 'プロフィール画像を選択してください',
            'image.image' => '「.png」または「.jpeg」形式でアップロードしてください',
            'name.required' => 'ユーザー名を入力してください',
            'post.required' => '郵便番号を入力してください',
            'post.max' => 'ハイフンを含む８文字以内で入力してください',
            'address.required' => '住所を入力してください',
            'building.required' => '建物名を入力してください',
        ];
    }
}
