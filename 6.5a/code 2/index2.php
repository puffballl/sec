<?php


if (isset($_POST['submit'])) {

    $input = $_POST['input'];
    $function = $_POST['function'];


    switch ($function) {
        case 1:
            echo "je koos If ( $ var )<br>";
            if (empty($input)) {
                echo "en de input is TRUE";
            } ELSE {
                echo "en de input is FALSE";
            }
            break;
        case 2:
            echo "je koos If ( !empty( $ var ) ) <br>";
            if (!empty ($input)) {
                echo "en de input is TRUE";
            } ELSE {
                echo "en de input is FALSE";
            }
            break;
        case 3:
            echo "je koos If ( $ var != '' ) <br>";
            If ($input != '') {
                echo "en de input is TRUE";
            } ELSE {
                echo "en de input is FALSE";
            }
            break;
        case 4:
            echo "je koos If ( strlen( $ var ) != 0 ))<br>";
            If ( strlen( $input ) != 0 ) {
                echo "en de input is TRUE";
            } ELSE {
                echo "en de input is FALSE";
            }
            break;
        case 5:
            echo "je koos If ( isset( $ var ) )<br>";
            If ( isset( $input ) ) {
                echo "en de input is TRUE";
            } ELSE {
                echo "en de input is FALSE";
            }
            break;
        case 6:
            echo "je koos If ( is_string( $ var ) )<br>";
            If ( is_string( $input ) ) {
                echo "en de input is TRUE";
            } ELSE {
                echo "en de input is FALSE";
            }
            break;
    }
}else {
    header("Location: https://www.youtube.com/watch?v=3w-C0-zVaW8");
    exit();
}