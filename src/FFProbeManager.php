<?php

declare(strict_types=1);

namespace PreemStudio\FFMpeg;

use FFMpeg\FFProbe;
use PreemStudio\Manager\AbstractManager;

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
