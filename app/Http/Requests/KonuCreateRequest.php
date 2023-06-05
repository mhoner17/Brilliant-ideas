<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KonuCreateRequest  extends FormRequest
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
        'pointName' => ['required'],
         'opinion'=>['required','min:50'],
        ];
    }
    public  function attributes(){
        return[
          'pointName'=>'Konu başlığı',
           'opinion'=>'İçerik',
        ];
    }
}