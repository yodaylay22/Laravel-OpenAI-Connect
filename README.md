# The Laravel-OpenAI-Connect package makes it easy to integrate OpenAI.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ycore/laravel-openai-connect.svg?style=flat-square)](https://packagist.org/packages/ycore/laravel-openai-connect)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/ycore/laravel-openai-connect/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/ycore/laravel-openai-connect/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/ycore/laravel-openai-connect/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/ycore/laravel-openai-connect/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/ycore/laravel-openai-connect.svg?style=flat-square)](https://packagist.org/packages/ycore/laravel-openai-connect)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/Laravel-OpenAI-Connect.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/Laravel-OpenAI-Connect)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require ycore/laravel-openai-connect
```

## Usage

```php
use Connectors\OpenAIConnect\OpenIA;


    $system = "You are a tech company employee named bob.";
    $message = [
        ["role" => "user", "content" => "what is your name?"],
    ];

    $data = OpenIA::model('gpt-3.5-turbo')->system($system)->prompt($message)->options(['max_tokens' => 1000])->send();

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
