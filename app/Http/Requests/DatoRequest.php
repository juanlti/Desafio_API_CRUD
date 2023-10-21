<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DatoRequest extends FormRequest
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

                       return $rules=[
                           'name'=>'required|max:20|min:3',
                           'lastname'=>'required|max:50|min:3',
                                'age'=>'required|integer'];

    }
}
