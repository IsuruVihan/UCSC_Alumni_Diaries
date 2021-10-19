<?php

    function PasswordGenerator($chars) {
        $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
        return substr(str_shuffle($data), 0, $chars);
    }
    
    function OTPGenerator($chars) {
        $data = '1234567890';
        return substr(str_shuffle($data), 0, $chars);
    }