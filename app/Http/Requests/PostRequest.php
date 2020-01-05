<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
                    'title'             => 'required',
                    'short_description' => 'required',
                    'description'       => 'required',
                    'tags'              => 'required',
                    'file'              => 'required|max:20000',
                    'status'            => 'required'
                ];
            case 'PUT':
                return [
                    'title'             => 'required',
                    'short_description' => 'required',
                    'description'       => 'required',
                    'tags'              => 'required',
                    'file'              => 'nullable|max:20000',
                    'status'            => 'required'
                ];
            default:
                break;
        }
    }
}
