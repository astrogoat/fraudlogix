<?php

namespace Astrogoat\Fraudlogix;

use Astrogoat\Fraudlogix\Settings\FraudlogixSettings;
use Helix\Lego\Apps\App;
use Helix\Lego\Apps\Services\IncludeFrontendViews;
use Helix\Lego\LegoManager;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FraudlogixServiceProvider extends PackageServiceProvider
{
    public function registerApp(App $app)
    {
        return $app
            ->name('fraudlogix')
            ->settings(FraudlogixSettings::class)
            ->migrations([__DIR__ . '/../database/migrations/settings'])
            ->includeFrontendViews(function (IncludeFrontendViews $views) {
                return $views->addToHead(['fraudlogix::script']);
            });
    }

    public function registeringPackage()
    {
        $this->callAfterResolving('lego', function (LegoManager $lego) {
            $lego->registerApp(fn (App $app) => $this->registerApp($app));
        });
    }

    public function configurePackage(Package $package): void
    {
        $package->name('fraudlogix')->hasViews();
    }
}
