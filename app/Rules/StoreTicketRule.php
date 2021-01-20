<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class StoreTicketRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }



    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        //make desc mandatory if status is in progress or closed
        if ($value=='' && request('status') != 'Open') {
            return false;
        }
        return true;

    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The validatioC error message.';
    }
}
