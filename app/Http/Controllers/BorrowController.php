<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Models\Borrow;
use Illuminate\Http\Request;
use Carbon\Carbon;

class BorrowController extends Controller
{

    public function index()
    {
        return view('dashboard.index');
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

        $borrows = Borrow::All();
        return view('dashboard.data', compact('borrows'));
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
