<?php

namespace Connectors\OpenAIConnect;

use Illuminate\Support\Facades\Http;

class model
{
    private $model;

    private $system;

    private $prompt;

    private $options;

    private $apikey;

    public function __construct($model)
    {
        $this->model = $model;
        $this->system = ['role' => 'system', 'content' => null];
        $this->prompt = [];
        $this->apikey = env('OpenAI_API_KEY');
        $this->options = [];

        return $this;
    }

    public function system(string $message = '')
    {
        $this->system = ['role' => 'system', 'content' => $message];

        return $this;
    }

    public function prompt(array $data = [])
    {
        $this->prompt = $data;

        return $this;
    }

    public function options(array $options = [])
    {
        $this->options = $options;

        return $this;
    }

    public function send($original_response = false)
    {
        array_unshift($this->prompt, $this->system);

        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$this->apikey,
            'Content-Type' => 'application/json',
        ])->post('https://api.openai.com/v1/chat/completions', array_merge([
            'model' => $this->model,
            'messages' => $this->prompt,
        ], $this->options));

        if ($response->successful()) {
            if ($original_response) {
                return $response->getBody();
            }

            $data = json_decode($response->getBody(), true);

            return (object) [
                'id' => $data['id'],
                'object' => $data['object'],
                'created' => $data['created'],
                'model' => $data['model'],
                'cost' => $data['usage']['total_tokens'],
                'usage' => [
                    'prompt_tokens' => $data['usage']['prompt_tokens'],
                    'completion_tokens' => $data['usage']['completion_tokens'],
                    'total_tokens' => $data['usage']['total_tokens'],
                    'total' => $data['usage']['total_tokens'],
                ],
                'role' => $data['choices'][0]['message']['role'],
                'message' => $data['choices'][0]['message']['content'],
                'content' => $data['choices'][0]['message']['content'],
            ];
        } else {
            return $response->json();
        }
    }
}
