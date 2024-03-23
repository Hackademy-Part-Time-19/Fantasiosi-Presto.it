<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnnouncementStoreRequest extends FormRequest
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
            'title' => 'required|max:50',
            'body' => 'required|max:2500',
            'price' => 'required|numeric' 
        ];
        
    }
    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio.',
            'title.max' => 'Il titolo non può superare i 50 caratteri.',
            'body.required' => 'Il corpo è obbligatorio.',
            'body.max' => 'Il corpo non può superare i 2500 caratteri.',
            'price.required' => 'Il prezzo è obbligatorio.',
            'price.decimal' => 'Il prezzo deve essere un valore numerico decimale.',
        ];
    }
    
}
