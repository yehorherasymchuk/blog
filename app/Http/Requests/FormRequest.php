<?php
/**
 * Description of FormRequest.php
 * @copyright Copyright (c) MISTER.AM, LLC
 * @author    Egor Gerasimchuk <egor@mister.am>
 */

namespace App\Http\Requests;

use \Illuminate\Foundation\Http\FormRequest as BaseFormRequest;

class FormRequest extends BaseFormRequest
{

    public function getFormData(): array
    {
        return $this->except(['_token', '_method']);
    }

}
