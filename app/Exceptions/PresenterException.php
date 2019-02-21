<?php

namespace App\Exceptions;
/**
 * inspired by laracast training on presenters
 * https://github.com/laracasts/Presenter
 */
class PresenterException extends \Exception
{
    public function render() {
        abort(500);
    }
}