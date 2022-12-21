<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjetRequest extends FormRequest
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
            'nomProjet' => ['required', 'string', 'max:50'],
            'nomClient' => ['required', 'string', 'max:50'],
            'nomResponsable' => ['required', 'string', 'max:50'],
            'description' => ['required', 'string', 'max:500']
        ];
    }
}
