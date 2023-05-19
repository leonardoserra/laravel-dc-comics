<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
            'title'=>'required|max:150',
            'description'=>'required|max:20000',
            'thumb'=>'required|max:60000|url',
            'price'=>'required|decimal:0,2',
            'series'=>'required|max:20000',
            'sale_date'=>'required|date',
            'type'=>'required|max:20000',
           
        ];
    }
}
