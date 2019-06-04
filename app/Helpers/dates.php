<?php

use Illuminate\Support\Carbon;

/**
 * Format date
 *
 * @param $value
 * @param string $format
 * @return string
 */
function formatDate($value, $format = 'd/m/Y')
{
    return Carbon::parse($value)->format($format);
}