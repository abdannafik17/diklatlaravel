<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SiswaRequest extends FormRequest
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

        if($this->method() == 'PATCH') {
            $nisn_rules    = 'required|string|size:4|unique:siswa,nisn,'.$this->get('id_siswa').',id_siswa';
            $telepon_rules = 'required|numeric|digits_between:10,15|unique:telepon,no_telepon,'.$this->get('id_siswa').',id_siswa';
            
        } else {
            $nisn_rules    = 'required|string|size:4|unique:siswa,nisn';
            $telepon_rules = 'required|numeric|digits_between:10,15|unique:telepon,no_telepon';
        }
        return [
                'nisn' => $nisn_rules,
                'nama_depan' => 'required|string|max:50',
                'nama_akhir' => 'required|string|max:50',
                'tempat_lahir' => 'required|string|max:50',
                'tanggal_lahir' => 'required|date',
                'jenis_kelamin' => 'required|in:L,P',
                'no_telepon' => $telepon_rules,
            ];
    }
}
