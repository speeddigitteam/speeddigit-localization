<?php

namespace SpeedDigit\Localization;

class LocalizationServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        \Log::info("Localization from SpeedDigit works again");
    }
}