<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Models\Borrow;
use Illuminate\Http\Request;
use Carbon\Carbon;
use PDF;

class BorrowController extends Controller
{

    public function index()
    {
        $total= Borrow::where('id', !null)->get();
        $borrow = Borrow::where('done_time', null)->get();
        $borrows = Borrow::where('done_time', !null)->get();
        return view('dashboard.index', compact('total','borrow', 'borrows'));
    }

    public function create()
    {
        return view('dashboard.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:4',
            'purposes' => 'required|min:8',
            'date' => 'required',
        ]);

        Borrow::create([
            'name' => $request->name,
            'purposes' => $request->purposes,
            'ket' => $request->ket,
            'nis' => $request->nis,
            'region' => $request->region,
            'teacher' => $request->teacher,
            'date' => $request->date,
        ]);
        return redirect()->route('data',)->with('successAdd', 'Anda berhasil mengisi data peminjam!');
    }
    public function data(){

        $borrows = Borrow::orderBy('date', 'DESC')->simplePaginate(5);
        //kalau orderBy buat 2 argument (nama fieldnya dan tipe nya ASC/DESC)
        // 1 data first, kalau all ambil data tanpa filter, kalau get ambil banyak data
        //kalau pakai where, where dulu baru orderBy pakai ->
        return view('dashboard.data', compact('borrows'));
    }

    public function createPDF()
    {
        $borrows = Borrow::orderBy('date', 'DESC')->get();
        // share borrows to view (ambil data) -> redirect ke halaman view sama seperti compact
        view()->share('borrows',$borrows);
        // yang didalam petik nama yang ada di blade, $ ambil nama variable untuk models
        //kalau mau didashboard 'dashboard.pdf_view'
        $pdf = PDF::loadView('pdf_view', $borrows->toArray());
        // download PDF file with download method
        return $pdf->download('data_peminjaman.pdf');
    }
     public function show(borrow $borrows)
     {

     }

     public function edit($id)
     {
        $borrow = Borrow::where('id', $id)->first();
        return view('dashboard.edit', compact('borrow'));
     }

     public function update(Request $request, $id)
     {
        Borrow::where('id', $id)->update([
            'done_time' => Carbon::now(),
        ]);
         return redirect('/data')->with('successUpdate', 'Data berhasil diperbarui!');
    //     return redirect()->route('index')->with('done', 'Todo sudah selesai dikerjakan');
     }
     public function destroy($id)
     {
        Borrow::where('id', $id)->delete();
        return redirect()->route('data')->with('delete', 'Berhasil menghapus data!');
     }
}
