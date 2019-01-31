<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'title' => 'required',
            'content' => 'required'
        ];
    }

    public function message()
    {
            return [
                'title.required' => 'attributes 은 필수  상항입니다 ',
                'content.required' => 'attributes 은 필수 상항입니다 ',
            ];
    }


    public function attributes()
    {
        return [
            'title' => '제목',
            'content' => '본문'
        ];
    }
      
}
