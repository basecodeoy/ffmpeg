<?php

declare(strict_types=1);

namespace BombenProdukt\FFMpeg;

use FFMpeg\FFMpeg;
use BombenProdukt\Manager\AbstractManager;

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
