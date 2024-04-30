<?php
class Validation {
    public static function validateEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public static function validatePassword($password) {
        // Add your password validation logic here
        return strlen($password) >=6;
    }
}
?>