# Laravel OpenAI Connect Lib

[![Latest Version on Packagist](https://img.shields.io/packagist/v/yeloi/laravel-openai-connect.svg?style=flat-square)](https://packagist.org/packages/yeloi/laravel-openai-connect)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/yeloi/laravel-openai-connect/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/yeloi/laravel-openai-connect/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/yeloi/laravel-openai-connect/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/yeloi/laravel-openai-connect/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/yeloi/laravel-openai-connect.svg?style=flat-square)](https://packagist.org/packages/yeloi/laravel-openai-connect)

The Laravel-OpenAI-Connect package makes it easy to integrate OpenAI.

## Installation

You can install the package via composer:

```bash
composer require yeloi/laravel-openai-connect
```

Add to your env file the openia api key:

```bash
OPENIA_API_KEY=<secret_key>
```

## Usage

```php
use Connectors\OpenAIConnect\OpenAI;


$system = "You are a tech company employee named bob.";
$message = [
    ["role" => "user", "content" => "what is your name?"],
];

$data = OpenAI::model('gpt-3.5-turbo')->system($system)->prompt($message)->options(['max_tokens' => 1000])->send();

dd($data->message);
// My name is Bob. How can I assist you today?

```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Yuri Eloi](https://github.com/yodaylay22)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
