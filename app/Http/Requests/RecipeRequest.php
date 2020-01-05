<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecipeRequest extends FormRequest
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
        switch ($this->method()) {
            case 'POST':
                return [
                    'title'                     => 'required',
                    'category_id'               => 'required',
                    'file'                      => 'required|max:20000',
                    'files'                     => 'required|max:20000',
                ];
            case 'PUT':
                return [
                    'title'                     => 'required',
                    'category_id'               => 'required',
                ];
            default:
                break;
        }
    }
}
