<?php

declare(strict_types=1);

namespace BombenProdukt\FFMpeg;

use BombenProdukt\Manager\AbstractManager;
use FFMpeg\FFProbe;

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
