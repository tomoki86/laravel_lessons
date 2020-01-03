<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

// class HelloRequest extends FormRequest
// {
//     /**
//      * Determine if the user is authorized to make this request.
//      *
//      * @return bool
//      */
//     public function authorize()
//     {
//         return false;
//     }

//     /**
//      * Get the validation rules that apply to the request.
//      *
//      * @return array
//      */
//     public function rules()
//     {
//         return [
//             //
//         ];
//     }
// }

// 137ページ

// class HelloRequest extends FormRequest
// {
//     public function authorize()
//     {
//         if ($this->path()=='hello')
//             {
//                 return true;
//             } else {
//                 return false;
//             }
//     }

//     public function rules()
//     {
//         return [
//             'name'=>'required',
//             'mail'=>'email',
//             'age'=>'numeric|between:0,150',
//         ];
//     }
// }

// 139ページ
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

// class HelloRequest extends FormRequest
// {
//     public function authorize()
//     {
//         if ($this->path()=='hello')
//             {
//                 return true;
//             } else {
//                 return false;
//             }
//     }

//     public function rules()
//     {
//         return [
//             'name'=>'required',
//             'mail'=>'email',
//             'age'=>'numeric|between:0,150',
//         ];
//     }

//     public function messages()
//     {
//         return [
//             'name.required'=>'名前は必ず入力してください',
//             'mail.email'=>'メールアドレスが必要です',
//             'age.numeric'=>'年齢を整数で入力してください',
//             'age.between'=>'年齢は0から150の間で入力ください。',
//         ];
//     }
// }

// 151ページ
class HelloRequest extends FormRequest
{
  public function authorize()
  {
    if($this->path() == 'hello')
    {
      return true;
    } else {
      return false;
    }
  }
  public function rules()
  {
    return [
      'name' => 'required',
      'mail' => 'email',
      'age' => 'numeric|hello',
    ];
  }

  public function messages()
  {
    return[
      'name.required' => '名前は必ず入力してください。',
      'mail.email' => 'メールアドレスが必要です。',
      'age.numeric' => '年齢を整数で記入してください。',
      'age.hello' => 'Hello!入力は偶数のみ受付します。',
    ];
  }
}