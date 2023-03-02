<?php

namespace Connectors\OpenAIConnect\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Connectors\OpenAIConnect\OpenAIConnect
 */
class OpenAIConnect extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Connectors\OpenAIConnect\OpenAIConnect::class;
    }
}
