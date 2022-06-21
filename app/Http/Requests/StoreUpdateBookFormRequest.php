<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateBookFormRequest extends FormRequest
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
            'date' => 'required',
            'name_aluno' => 'required',
            'class_aluno' => 'required',
            'grade_aluno' => 'required',
            'title_historia' => 'required',
            'cover_historia' => 'nullable',
            'sinopse_historia' => 'required',
            'historia' => 'required',
            
        ];
    }
}
