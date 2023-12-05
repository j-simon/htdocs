<?php

function validate(string $input, string $field)  
{
    if (empty($input)) {
        $_SESSION['status'] = "{$field} is required.";
        redirect('index.php');
        exit;
    } else {
        return $input;
    }
}

function validateEmail(string $value)
{
    if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['status'] = "The email is not valid.";
        redirect('index.php');
        exit;
    }
    else {
        return $value;
    }
}
