<?php

/** @var \Illuminate\Validation\Factory $validator */

$validator->extend(
    'alpha_spaces',
    function ($attribute, $value, $parameters)
    {
        return preg_match('/^[\pL\s]+$/u', $value);
    },
    'Name should contain only alphabets.'
);
