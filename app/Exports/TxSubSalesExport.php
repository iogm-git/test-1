<?php

namespace App\Exports;

use App\Models\tx_sub_sales;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class TxSubSalesExport implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function view(): View
    {
        return view('pages.management.tx-sub-sales.export', [
            'tx_sub_sales' => tx_sub_sales::all()
        ]);
    }
}
