<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientRequest extends FormRequest
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
            'patient_name' => 'required|string',
            'patient_nik' => 'required|string',
            'patient_kk' => 'required|string',
            'patient_phone' => 'required|string',
            'patient_email' => 'required|email',
            'birth_date' => 'required|date',
            'address_line' => 'required|string',
        ];
    }
}
