<?php

    function generatePassword($length) {
        $caratteri = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789()!?@#$%&*-_+=';
        $password = '';
        for ($i = 0; $i < $length; $i++) {
            $password .= $caratteri[rand(0, strlen($caratteri) - 1)];
        }
        return $password;
    }

?>