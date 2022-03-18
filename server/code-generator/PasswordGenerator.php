<?php

function PasswordGenerator() {
    $digits = '1234567890';
    $alphabetUpper = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $alphabetLower = 'abcefghijklmnopqrstuvwxyz';
    $special = '!@#$%&*/?+';
    
    $password = substr($digits, 0, 3);
    $password = $password . substr($alphabetUpper, 1, 3);
    $password = $password . substr($alphabetLower, 2, 3);
    $password = $password . substr($special, 3, 1);
    return str_shuffle($password);
}