<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePagoRequest extends FormRequest
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
            'ctaOrd' => 'required',
            'monto' => '',
            'costoEnv' => 'required',
            'idTrans' => 'required',
            'fechaHora' => 'required',
            'id_tipoPago' => 'required',
            'id_direccion' => 'required',
        ];
    }
}
