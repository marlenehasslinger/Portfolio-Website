<?php

date_default_timezone_set("Europe/Berlin");

function e($text) {
    return htmlspecialchars($text, ENT_QUOTES, "UTF-8");
}

function debug_to_console($data) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
}