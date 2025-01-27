<?php

declare(strict_types=1);

namespace Modules\Geo\DataTransferObjects;

class ElevationResultDTO
{
    public function __construct(
        public readonly float $elevation,
        public readonly float $latitude,
        public readonly float $longitude,
    ) {
    }
}
