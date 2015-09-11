<?php
namespace Chonla\Randomizr;

class Randomizr {
    const NUMERIC = '0123456789';
    const ALPHABETIC = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    const ALPHANUMERIC = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    const HEXADECIMAL = '0123456789abcdef';

    function __construct() {
        mt_srand();
    }

    public function number($length) {
        return $this->rand(self::NUMERIC, $length);
    }

    public function alphabet($length) {
        return $this->rand(self::ALPHABETIC, $length);
    }

    public function alphanumeric($length) {
        return $this->rand(self::ALPHANUMERIC, $length);
    }

    public function hexadecimal($length) {
        return $this->rand(self::HEXADECIMAL, $length);
    }

    public function rand($domain, $length) {
        return preg_replace_callback('/0/', function() use ($domain) {
            return $domain[mt_rand(0, strlen($domain) - 1)];
        }, str_repeat('0', $length));
    }
}