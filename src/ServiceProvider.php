<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\FFMpeg;

use BaseCodeOy\PackagePowerPack\Package\AbstractServiceProvider;
use Illuminate\Contracts\Container\Container;

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
