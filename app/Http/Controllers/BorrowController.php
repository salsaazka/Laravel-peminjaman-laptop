<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Models\Borrow;
use Illuminate\Http\Request;

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
        // $request->validate([
        //     'name' => 'required|min:4',
        //     'purposes' => 'required|min:8',
        //     'date' => 'required',
        // ]);

        Borrow::create([
            'name' => $request->name,
            'purposes' => $request->purposes,
            'ket' => $request->ket,
            'nis' => $request->nis,
            'region' => $request->region,
            'teacher' => $request->teacher,
            'date' => $request->date,
            'status' => 0,
        ]);
        return redirect()->route('create')->with('successAdd', 'Anda berhasil mengisi data peminjam!');
    }

}
