<?php namespace Diadus\Translit;

use Illuminate\Support\Facades\Facade;

class TranslitFacade extends Facade{

    protected static function getFacadeAccessor(){
        return 'translit';
    }
}