<?php

namespace Mage2\Project\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
        $validation['name']         = 'required|max:255';
        $validation['due_date']     = 'required|date';
        //$validation['description']  = 'required';

        return $validation;
    }
}
