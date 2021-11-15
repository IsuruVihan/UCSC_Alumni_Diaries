<?php

function OTPGenerator($chars) {
    $data = '1234567890';
    return substr(str_shuffle($data), 0, $chars);
}