<?php

declare(strict_types=1);

/**
 * Copyright (c) 2021 Kai Sassnowski
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 *
 * @see https://github.com/roach-php/roach
 */

namespace Sassnowski\Roach\Scheduling\Timing;

use DateTimeImmutable;

interface ClockInterface
{
    public function now(): DateTimeImmutable;

    public function sleep(int $seconds): void;

    public function sleepUntil(DateTimeImmutable $date): void;
}
