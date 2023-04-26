<?php

declare(strict_types=1);

namespace BombenProdukt\FFMpeg;

use FFMpeg\FFProbe;
use BombenProdukt\Manager\AbstractManager;

final class FFProbeManager extends AbstractManager
{
    protected function createConnection(array $config): object
    {
        return FFProbe::create($config);
    }

    protected function getConfigName(): string
    {
        return 'ffmpeg';
    }
}
