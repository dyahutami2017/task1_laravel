<?php

namespace App\Exports;

use App\identitas;
use Maatwebsite\Excel\Concerns\FromCollection;

class identitasExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return identitas::all();
    }
}
