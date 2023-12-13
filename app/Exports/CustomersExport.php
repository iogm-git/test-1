<?php

namespace App\Exports;

use App\Models\ms_customer;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class CustomersExport implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function view(): View
    {
        return view('pages.management.customer.export', [
            'ms_customer' => ms_customer::all()
        ]);
    }
}
