<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class OneOfTwoFieldsSelected implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        // $levelId = request()->input('level_id');
        // $levelName = request()->input('level_name');
        // if(!empty($levelId) || !empty($levelName))
        // {
        //     // $fail('Eiter Level name or level radio must be selected.');
        // }
        
    }
}
