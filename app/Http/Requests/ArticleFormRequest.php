<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleFormRequest extends FormRequest
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
        return[
            'title'=> 'required|min:4',
            // 'author'=> 'required',
            'body'=> 'required|max:2000',
            'img'=> 'image'
         ];
    }

   /**
 * Get the error messages for the defined validation rules.
 *
 * @return array<string, string>
 */
public function messages(): array
{
    return [
        'title.required' => 'Il titolo è obbligatorio',
        'body.required' => 'Il corpo del testo è obbligatorio',
        'img.image' => 'Passare un file di tipo img',
        'body.max' => 'Il numero massimo di caratteri è 2000',
        // 'author.required' => 'L autore è obbligatorio',
    ];
}
}
