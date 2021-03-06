<?php

namespace HessamCMS\Requests;


use Illuminate\Validation\Rule;
use HessamCMS\Requests\Traits\HasCategoriesTrait;
use HessamCMS\Requests\Traits\HasImageUploadTrait;

class CreateHessamCMSPostRequest extends BaseHessamCMSPostRequest
{
    use HasCategoriesTrait;
    use HasImageUploadTrait;

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $return = $this->baseBlogPostRules();
        return $return;
    }

}
