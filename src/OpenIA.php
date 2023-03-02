<?php

namespace Connectors\OpenAIConnect;

class OpenIA
{
    public static function model($name) {
        return new model($name);
    }
}
