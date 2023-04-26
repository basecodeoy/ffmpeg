<?php

declare(strict_types=1);

namespace BombenProdukt\FFMpeg\Facades;

use Illuminate\Support\Facades\Facade;

final class FFProbe extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'ffprobe';
    }
}
