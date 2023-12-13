<?php

namespace App\Exports;

use App\Models\ms_user;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class UsersExport implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function view(): View
    {
        return view('pages.management.user.export', [
            'ms_user' => ms_user::all()
        ]);
    }
}
