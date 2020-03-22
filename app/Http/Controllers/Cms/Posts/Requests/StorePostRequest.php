<?php
/**
 * Description of StorePostRequest.php
 * @copyright Copyright (c) MISTER.AM, LLC
 * @author    Egor Gerasimchuk <egor@mister.am>
 */

namespace App\Http\Controllers\Cms\Posts\Requests;


use App\Http\Requests\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => 'required|max:255|min:5',
            'excerpt' => 'required|max:255',
            'body' => 'required',
            'status' => 'required',
        ];
    }

    public function getFormData(): array
    {
        return array_merge(parent::getFormData(), [
            'locale' => config('app.locale'),
            'author_id' => $this->user()->id,
        ]);
    }

}
