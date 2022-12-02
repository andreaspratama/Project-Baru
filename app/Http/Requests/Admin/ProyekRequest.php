<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProyekRequest extends FormRequest
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
            'project' => 'required|max:30',
            'nilai' => 'required',
            'pengerjaan' => 'required',
            'hasil' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'project.required' => 'Nama project tidak boleh kosong',
            'project.max' => 'Maksimal 30 karakter',
            'nilai.required' => 'Nilai tidak boleh kosong',
            'pengerjaan.required' => 'Pengerjaan tidak boleh kosong',
            'hasil.required' => 'Hasil tidak boleh kosong'
        ];
    }
}
