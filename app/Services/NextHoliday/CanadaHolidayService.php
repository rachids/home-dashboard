<?php

namespace App\Services\NextHoliday;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;

class CanadaHolidayService
{
    private const BASE_URL = 'https://canada-holidays.ca/api/v1/';
    private const PROVINCE_ID = 'QC';

    /**
     * Get the JSON data from the Canada Holidays API.
     * @return Response
     */
    private function fetchHolidayData(): Response
    {
        $uri = 'provinces/'. self::PROVINCE_ID;

        return Http::baseUrl(self::BASE_URL)
            ->asJson()
            ->get($uri);
    }

    public function getNextHoliday(): array
    {
        return $this->fetchHolidayData()->json('province.nextHoliday');
    }
}
