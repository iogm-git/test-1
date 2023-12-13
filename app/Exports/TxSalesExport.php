<?php

namespace App\Exports;

use App\Models\tx_sales;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class TxSalesExport implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function view(): View
    {
        return view('pages.management.tx-sales.export', [
            'tx_sales' => tx_sales::all()
        ]);
    }
}
