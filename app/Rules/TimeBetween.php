<?php

namespace App\Rules;

use Carbon\Carbon;
use Illuminate\Contracts\Validation\Rule;

class TimeBetween implements Rule
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
        $pickDate = Carbon::parse($value);
        $pickTime = Carbon::createFromTime($pickDate->hour, $pickDate->minute, $pickDate->second);
        $earliestTime = Carbon::createFromTimeString('15:00:00');
        $latestTime = Carbon::createFromTimeString('22:00:00');

        return $pickTime->between($earliestTime, $latestTime) ? true : false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Choose the time between 3pm and 10pm';
    }
}
