<?php

namespace App\Exports;

use App\Models\ms_salesman;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class SalesmanExport implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function view(): View
    {
        return view('pages.management.salesman.export', [
            'salesman' => ms_salesman::all()
        ]);
    }
}
