<?php

    function generatePassword($length, $chars, $repeat) {
        $charsAvailable = strlen($chars);
        $password = '';
        
        while (strlen($password) < $length) {
            $char = $chars[rand(0, $charsAvailable - 1)];
            if ($repeat === 'true' || !str_contains($password, $char)) {
                $password .= $char;
            }
        }
        return $password;
    }

    function setChars($letters, $numbers, $symbols) {
        $lettere = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        $simboli = '()!?@#$%&*-_+=';
        $numeri = '0123456789';
        $chars = "";

        if (!$letters && !$numbers && !$symbols) {
            $chars = $lettere . $numeri . $simboli;
        }
        if ($letters) {
            $chars .= $lettere;
        }
        if ($numbers) {
            $chars .= $numeri;
        }
        if ($symbols) {
            $chars .= $simboli;
        }
        return $chars;
    }

?>