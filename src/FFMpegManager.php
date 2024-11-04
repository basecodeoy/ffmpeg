<?php

declare(strict_types=1);

namespace BaseCodeOy\FFMpeg;

use BaseCodeOy\Manager\AbstractManager;
use FFMpeg\FFMpeg;

final class FFMpegManager extends AbstractManager
{
    protected function createConnection(array $config): object
    {
        return FFMpeg::create($config);
    }

    protected function getConfigName(): string
    {
        return 'ffmpeg';
    }
}
