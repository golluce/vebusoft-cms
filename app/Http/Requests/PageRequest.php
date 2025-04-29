<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PageRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Giriş kontrolü yapılmayacaksa true
    }

    public function rules()
    {
        return [
            'title' => 'required|min:3',
            'slug' => 'nullable|unique:pages,slug',
            'meta_title' => 'nullable',
            'meta_description' => 'nullable',
            'seo_keywords' => 'nullable',
            'status' => 'nullable|integer',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Başlık alanı zorunludur.',
            'title.min' => 'Başlık en az 3 karakter olmalıdır.',
            'slug.unique' => 'Bu URL zaten kullanılıyor.',
        ];
    }
}
