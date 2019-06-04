<?php

/**
 * Format mobile numbers (Brazil)
 *
 * @param $value
 * @return string
 */
function formatMobileNumber($value)
{
    return '(' . substr($value, 0, 2) . ') ' . substr($value, 2, 1) . ' ' . substr($value, 3, 4) . '-' . substr($value, 7);
}