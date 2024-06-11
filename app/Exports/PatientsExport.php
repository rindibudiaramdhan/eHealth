<?php

namespace App\Exports;

use App\Models\Patient;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Excel;

class PatientsExport implements FromQuery
{
    use Exportable;

    public function query()
    {
        return Patient::query();
    }
}
