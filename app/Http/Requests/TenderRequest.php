<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TenderRequest extends FormRequest
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
            'tender_id' => 'required|integer|unique:tenders,tender_id',
            'description' => 'required',
            'document_price' => 'required|integer',
            'date' => 'required|date',
            'tender_security' => 'required|integer',
            'department_id' => 'required|integer',
            'method_id' => 'required|integer',
            'location_id' => 'required|integer',
            'similar' => 'nullable',
            'turnover' => 'nullable',
            'liquid' => 'nullable',
            'tender_capacity' => 'required',
            'other' => 'required'
        ];
    }
}
