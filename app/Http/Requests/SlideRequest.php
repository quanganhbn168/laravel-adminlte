<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SlideRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        $rules = [
            'title'  => 'required|string|max:255',
            'status' => 'boolean',
        ];

        if ($this->isMethod('post')) {
            // Tạo mới: bắt buộc phải có image (FilePond trả về string)
            $rules['image'] = 'required|string';
        } else {
            // Cập nhật: nếu có field thì phải là string
            $rules['image'] = 'sometimes|string';
        }

        return $rules;
    }
}
