<?php

declare(strict_types=1);

namespace PreemStudio\FFMpeg;

use Illuminate\Contracts\Container\Container;
use PreemStudio\Jetpack\Package\AbstractServiceProvider;

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
