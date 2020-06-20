<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class EmployerOtherRequest extends FormRequest
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
            "employerOther"=> "required|unique:employer_others"   

        ];
    }
    public function messages()
    {
        return [
            'employerOther.required' => 'يجب تعبئة الحقل',
            'employerOther.unique'  => 'جهة التكليف مكررة مكررة',
        ];
    }
}
