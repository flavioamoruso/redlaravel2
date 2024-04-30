<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required',
            'description'=>'required|min:5',
            'price'=>'required',
            'img'=>'required|image'

        ];
    }

    public function message(){
        return [
            'name.required'=>'Il nome è obbligatorio',
            'description.required'=>'La descrizione è obbligatoria',
            'price.required'=>'Il prezzo è obbligatorio'
        ];
    }
}
