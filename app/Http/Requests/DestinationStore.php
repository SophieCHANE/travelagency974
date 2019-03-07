<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DestinationStore extends FormRequest
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
    {//dd($request);
        return [   
            'destinate'=>'required|string|max:255',
            'title'=>'required|string|max:255',
            'price'=>'required|integer|',
            'date_departure'=>'required|date',
            'date_return'=>'required|date',
            'description'=>'required|string',
            'percentage_discount'=>'integer|nullable',
            'date_start_discount'=>'date|nullable',
            'date_end_discount'=>'date|nullable',
            'number_available'=>'required|integer',
            'number_reserved'=>'required|integer'

        ];//a finir rajouter les images a stocker
    }
        
}
