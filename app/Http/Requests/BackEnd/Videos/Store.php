<?php

namespace App\Http\Requests\BackEnd\Videos;

use Illuminate\Foundation\Http\FormRequest;

class Store extends FormRequest
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

       'name' => ['required', 'max:191'],
       'des' => ['required', 'min:10'],  
       'meta_keywords' => ['max:191'], 
       'meta_des' => ['min:8'],
       'youtube'        => ['required', 'min:10', 'url'],
       'published'      => ['required'],
       'category_id'=> ['required'],
       
       
      
      ]; 
    }
}
