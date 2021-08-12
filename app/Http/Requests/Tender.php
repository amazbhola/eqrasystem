<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Tender extends FormRequest
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
            'tender_id'=>'required|integer',
            'description'=>'required',
            'document_price'=>'required|integer',
            'tender_security'=>'required|integer',
            'department'=>'required',
            'method'=>'required',
            'location'=>'required',
            'liquid'=>'required'
        ];
    }
}
