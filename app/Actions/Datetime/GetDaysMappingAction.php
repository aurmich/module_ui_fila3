<?php

declare(strict_types=1);

namespace Modules\UI\Actions\Datetime;

use BladeUI\Icons\Factory as IconFactory;
<<<<<<< HEAD
use Carbon\Carbon;
=======
>>>>>>> 2e2df281 (.)
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;
use Spatie\QueueableAction\QueueableAction;
<<<<<<< HEAD
=======
use Carbon\Carbon;
>>>>>>> 2e2df281 (.)

class GetDaysMappingAction
{
    use QueueableAction;

    public function execute(): array
    {
        $days = collect([
            Carbon::MONDAY,
            Carbon::TUESDAY,
            Carbon::WEDNESDAY,
            Carbon::THURSDAY,
            Carbon::FRIDAY,
            Carbon::SATURDAY,
        ])->mapWithKeys(function ($day) {
<<<<<<< HEAD
            $carbon = Carbon::create();
            if ($carbon === null) {
                throw new \RuntimeException('Failed to create Carbon instance');
            }
            
            $dayKey = strtolower(
                $carbon
                    ->startOfWeek()
                    ->addDays($day - 1)
                    ->format('l'),
            );
            
            $dayLabel = ucfirst(
                $carbon
                    ->startOfWeek()
                    ->addDays($day - 1)
                    ->isoFormat('dddd'),
            );
=======
            /** @phpstan-ignore method.nonObject */
            $dayKey = strtolower(Carbon::create()->startOfWeek()->addDays($day - 1)->format('l'));
            /** @phpstan-ignore method.nonObject */
            $dayLabel = ucfirst(Carbon::create()->startOfWeek()->addDays($day - 1)->isoFormat('dddd'));
>>>>>>> 2e2df281 (.)

            return [$dayKey => $dayLabel];
        });

        return $days->toArray();
<<<<<<< HEAD
    }
}
=======

    }
}
>>>>>>> 2e2df281 (.)
