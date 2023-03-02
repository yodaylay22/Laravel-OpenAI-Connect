<?php

namespace Connectors\OpenAIConnect;

use Connectors\OpenAIConnect\Commands\OpenAIConnectCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class OpenAIConnectServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-openai-connect')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-openai-connect_table')
            ->hasCommand(OpenAIConnectCommand::class);
    }
}