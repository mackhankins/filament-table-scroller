<?php

namespace Mackhankins\FilamentTableScroller;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class FilamentTableScrollerServiceProvider extends PluginServiceProvider
{
    public static string $name = 'filament-table-scroller';

    protected array $resources = [
        // CustomResource::class,
    ];

    protected array $pages = [
        // CustomPage::class,
    ];

    protected array $widgets = [
        // CustomWidget::class,
    ];

    protected array $styles = [
        'plugin-filament-table-scroller' => __DIR__.'/../resources/dist/filament-table-scroller.css',
    ];

    protected array $scripts = [
        'plugin-filament-table-scroller' => __DIR__.'/../resources/dist/filament-table-scroller.js',
    ];

    // protected array $beforeCoreScripts = [
    //     'plugin-filament-table-scroller' => __DIR__ . '/../resources/dist/filament-table-scroller.js',
    // ];

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name);
    }
}
