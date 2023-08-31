<?php

namespace App\Exports;

use App\Models\PlayerManagement;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PlayerExport implements FromView

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('admin.player_management.excel', [
            'player_data' => PlayerManagement::with('user')->with('position')->get()
        ]);
    }
}
