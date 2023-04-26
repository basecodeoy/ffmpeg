<?php

declare(strict_types=1);

namespace BombenProdukt\FFMpeg;

use Illuminate\Contracts\Container\Container;
use BombenProdukt\PackagePowerPack\Package\AbstractServiceProvider;

final class ServiceProvider extends AbstractServiceProvider
{
    public function packageRegistered(): void
    {
        $this->app->singleton('ffmpeg', function (Container $app) {
            return new FFMpegManager($app['config']);
        });

        $this->app->singleton('ffprobe', function (Container $app) {
            return new FFProbeManager($app['config']);
        });
    }
}
