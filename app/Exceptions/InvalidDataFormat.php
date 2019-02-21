<?php

namespace App\Exceptions;

class InvalidDataVormat extends \Exception
{
    public function render() {
        abort(500);
    }
}