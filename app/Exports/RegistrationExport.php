<?php

namespace App\Exports;

use App\Models\Registration;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Excel;

class RegistrationExport implements FromQuery
{
    use Exportable;

    public function query()
    {
        return Registration::query();
    }
}
