<?php

namespace App\Services\NextHoliday;

use Carbon\Carbon;

class HolidayDTO
{
    public function __construct(
        public string $name,
        public Carbon $date,
    )
    {
    }

    public function getDateFormatted(): string
    {
        return $this->date->isoFormat('dddd DD MMMM OY');
    }
}
