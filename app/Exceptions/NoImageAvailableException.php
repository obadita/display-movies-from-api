<?php

namespace App\Exceptions;

class NoImageAvailableException extends \Exception
{
    public function render() {
        abort(500);
    }
}