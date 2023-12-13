<?php

namespace App\Exports;

use App\Models\ms_item;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ItemsExport implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function view(): View
    {
        return view('pages.management.item.export', [
            'ms_item' => ms_item::all()
        ]);
    }
}
