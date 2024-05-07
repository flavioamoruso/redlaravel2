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
        return true;
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
            'price'=>'required',
            'description'=>'required|min:5',
            'category'=>'required',
        ];
    }

    public function messages(){
        return[
            'name.required'=>'Il nome è obbligatorio',
            'price.required'=>'Il prezzo è obbligatorio',
            'description.required'=>'La descrizione è obbligatoria',
            'description.min'=>'La descrizione deve essere di 5 caratteri',
            'category.required'=>'La categoria è obbligatoria'
        ];
    }
}
