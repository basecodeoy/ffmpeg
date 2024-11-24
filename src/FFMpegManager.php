<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

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
