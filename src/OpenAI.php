<?php

namespace Connectors\OpenAIConnect;

class OpenAI
{
    public static function model($name)
    {
        return new model($name);
    }
}
