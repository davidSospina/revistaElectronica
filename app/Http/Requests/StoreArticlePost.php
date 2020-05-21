<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticlePost extends FormRequest
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
            'name' => 'required|min:5|max:120',
            'category_id' => 'required',
            'description' => 'required',
            'review_date' => 'required',
            'state' => 'required',
            'author_id' => 'required',
            'archive_pdf' => 'required|mimes:pdf',
        ];
    }
}
