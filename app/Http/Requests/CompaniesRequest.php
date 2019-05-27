<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompaniesRequest extends FormRequest
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
        $id = ($this->method() == 'PUT')? $this->route('id') : '';
        return [
            'name'  => 'required|alpha_num|min:5|max:25',
            'email' => 'required|email|unique:companies,email,'. $id,
            'logo'  => 'image|mimes:jpeg,bmp,png|dimensions:min_width=100,min_height=200|'.($this->method() == 'PUT')?'nullable':'required',
        ];
    }
}
