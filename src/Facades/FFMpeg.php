<?php

declare(strict_types=1);

namespace BaseCodeOy\FFMpeg\Facades;

use Illuminate\Support\Facades\Facade;

final class FFMpeg extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'ffmpeg';
    }
}
