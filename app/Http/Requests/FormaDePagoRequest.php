<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormaDePagoRequest extends FormRequest
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
        switch($this->method())
        {
            case 'GET':
            case 'DELETE':
            {
                return [];
            }
            case 'POST':
            {
                return [
                    'detalle' => 'required|max:255|unique:formas_de_pago',
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'detalle' => 'required|max:255|unique:formas_de_pago,detalle,'. $this->formasdepago->id,
                ];
            }
            default:break;
        }
    }
}
