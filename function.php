<?php
function stringToBinary($string, $delimiter = ',') {
    // Check if the input is a valid string
    if (!is_string($string)) {
        return false;
    }

    // Replace special delimiter values
    if ($delimiter === '\\n') {
        $delimiter = PHP_EOL;
    } elseif ($delimiter === '\\t') {
        $delimiter = "\t";
    }

    // Convert each character to its binary representation
    $binaryArray = array();
    for ($i = 0; $i < strlen($string); $i++) {
        $binaryArray[] = sprintf('%08b', ord($string[$i]));
    }

    // Join the binary representations with the specified delimiter
    return implode($delimiter, $binaryArray);
}
?>