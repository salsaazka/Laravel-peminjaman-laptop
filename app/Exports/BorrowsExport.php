<?php

namespace App\Exports;

use App\Models\Borrow;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BorrowsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
            "Nama", 
            "NIS", 
            "Rayon", 
            "Alasan", 
            "Tanggal Peminjaman", 
            "Tanggal Pengembalian"
        ];
    }

    public function collection()
    {
        return Borrow::select(
            "name",
            "nis",
            "region",
            "purposes",
            "date",
            "done_time"
        )->get();
    }

}
