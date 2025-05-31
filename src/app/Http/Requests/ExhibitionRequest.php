<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExhibitionRequest extends FormRequest
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
        'name' => ['required'],
        'image' => ['required'],
        'quality' => ['required'],
        'categories' => ['required'],
        'content' => ['required', 'max:255'],
        'price' => ['required', 'integer', 'min:0'],
        ];
    }

    public function messages(){
        return [
            'name.required' => '商品名を入力してください',
            'image.required' => '画像を選択してください',
            'image.image' => '「.png」または「.jpeg」形式でアップロードしてください',
            'quality.required' => '商品状態を選択してください',
            'categories.required' => '商品カテゴリーを選択してください',
            'content.required' => '商品説明を入力してください',
            'content.max' => '120文字以内で入力してください',
            'price.required' => '値段を入力してください',
            'price.integer' => '数値で入力してください',
            'price.digits_between' => '0円以上で入力してください',
        ];
    }
}

