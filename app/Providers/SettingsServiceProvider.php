<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Settings\GeneralSettings;
use App\Settings\SiteSettings;
use App\Settings\SiteSeoSettings;
use App\Settings\SiteSocialSettings;
use App\Settings\SiteScriptSettings;

class SettingsServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        // Share settings once instead of using a wildcard composer that runs for every partial
        View::share('generalSettings', app(GeneralSettings::class));
        View::share('siteSettings', app(SiteSettings::class));
        View::share('seoSettings', app(SiteSeoSettings::class));
        View::share('siteSocialSettings', app(SiteSocialSettings::class));
        View::share('scriptSettings', app(SiteScriptSettings::class));
    }
}
