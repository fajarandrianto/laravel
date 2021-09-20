<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMagang extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nis' => 'required|unique:magang|max:255',
            'nama' => 'required',
            'jurusan' => 'required',
            'asal_sekolah' => 'required',
            'jenis_kelamin' => 'required',
            'telp_siswa' => 'required',
            'napem' => 'required',
            'telp_pem' => 'required',
            'mulai' => 'required',
            'akhir' => 'required',
            'divisi' => 'required',
        ];
    }
}
