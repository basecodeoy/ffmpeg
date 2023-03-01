<?php

declare(strict_types=1);

namespace PreemStudio\FFMpeg\Facades;

use Illuminate\Support\Facades\Facade;

final class FFProbe extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'ffprobe';
    }
}
