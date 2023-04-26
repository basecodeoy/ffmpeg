<?php

declare(strict_types=1);

namespace BombenProdukt\FFMpeg;

use BombenProdukt\Manager\AbstractManager;
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
