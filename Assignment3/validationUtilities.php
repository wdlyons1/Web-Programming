<!-- validation functions used by validateConfirm.php -->

<?php
// include 'validateConfirm.php';

function isValidDate($value)
{
    $date = (String) $value;
    $dateArray = date_parse($date);
    if (checkdate((int)$dateArray['month'], (int)$dateArray['day'], (int)$dateArray['year'])) {
        return $value;
    } else {
        return "Invalid Date";
    }
}

function fIsValidRange($value, $min, $max)
{
    if (is_numeric($value) && ($value >= $min) && ($value <= $max)) {
        return $value;
    } else {
        return "Invalid Age";
    }
}

function fIsValidZipcode($value)
{
    if (is_numeric($value) && strlen($value) == 5) {
        return $value;
    } else {
        return "Invalid Zipcode";
    }
}

?>