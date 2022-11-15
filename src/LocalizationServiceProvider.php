<?php

namespace SpeedDigit\Localization;

use SpeedDigit\Localization\Calculator;

class LocalizationServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {
        $this->app->bind('calculator', function($app) {
            return new Calculator();
        });
    }

    public function boot()
    {
        // $loader = \Illuminate\Foundation\AliasLoader::getInstance();
        // $loader->alias('Translate', SpeedDigit\Localization\Translate::class);

        \Log::info("Localization from SpeedDigit works again");
    }
}