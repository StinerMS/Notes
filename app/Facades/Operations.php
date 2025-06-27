<?php
namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class Operations extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'operations';
    }
}

// se posso registrar meu service que já possui funções estáticas, pra que caralhos existe facades se isso só deixa a função estática?
