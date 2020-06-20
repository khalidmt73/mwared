<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobTitleRequest extends FormRequest
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
            "jobTitle"=> "required|unique:job_titles"   
        ];
    }
    public function messages()
    {
        return [
            'jobTitle.required' => 'يجب تعبئة الحقل',
            'jobTitle.unique'  => 'الوظيفة مكررة',
        ];
    }
}
