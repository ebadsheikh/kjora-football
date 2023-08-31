<?php

namespace App\Exports;

use App\Models\Stadium;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class StadiumExport implements FromView

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('admin.stadium.excel', [
            'stadium' => Stadium::all()
        ]);
    }
}
