<?php

namespace Bolyfci\LivewireMultiselect;

use Bolyfci\LivewireMultiselect\View\Multiselect;
use Illuminate\Support\Facades\Blade;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LivewireMultiselectServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('livewire-multiselect')
            ->hasViews();
    }

    public function bootingPackage()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'multiselect');

        Blade::component('multiselect', Multiselect::class);
    }
}
