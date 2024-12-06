<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\FFMpeg;

use BaseCodeOy\Manager\AbstractManager;
use FFMpeg\FFProbe;

final class FFProbeManager extends AbstractManager
{
    #[\Override()]
    protected function createConnection(array $config): object
    {
        return FFProbe::create($config);
    }

    #[\Override()]
    protected function getConfigName(): string
    {
        return 'ffmpeg';
    }
}
