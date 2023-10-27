<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeeStoreRequest extends FormRequest
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
            'application_fee' => ['required', 'numeric', 'between:-99999999.99,99999999.99'],
            'living_expenses' => ['required', 'numeric', 'between:-99999999.99,99999999.99'],
            'local_tuition' => ['required', 'numeric', 'between:-99999999.99,99999999.99'],
            'int_tuition' => ['required', 'numeric', 'between:-99999999.99,99999999.99'],
            'application_fee' => ['required', 'numeric', 'between:-99999999.99,99999999.99'],
            'living_expenses' => ['required', 'numeric', 'between:-99999999.99,99999999.99'],
            'local_tuition' => ['required', 'numeric', 'between:-99999999.99,99999999.99'],
            'int_tuition' => ['required', 'numeric', 'between:-99999999.99,99999999.99'],
        ];
    }
}
