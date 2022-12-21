<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TacheMezimaRequest extends FormRequest
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
            //
            'nomTache'=>['required', 'string', 'max:50'],
            'dureeTache'=>['string', 'max:50'],           
            'statutTache'=>[ 'string', 'max:50'],
           'tacheAnt'=>[ 'string', 'max:50'],
            'projet_mezima_id'=>[ 'string', 'max:50']
        ];
    }
}
