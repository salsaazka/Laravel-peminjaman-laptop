<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Models\Borrow;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use PDF;
use App\Exports\BorrowsExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\BorrowsImport;

class BorrowController extends Controller
{

    public function index(Request $request)
    {
        // $total= Borrow::where('id', !null)->get();
        // $borrow = Borrow::where([
        //     ['done_time', '=',null->get()],
        //     ['done_time'],
        // ]);
        $borrow = Borrow::where('done_time', '=',null)->get();
        $borrows = Borrow::where('done_time', '<>',null)->get();
        return view('dashboard.index', compact('borrow', 'borrows'));
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

    //pdf
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

    //excel
    public function export()
    {
        return Excel::download(new BorrowsExport, 'DataPeminjaman.xlsx');

    }

    public function import()
    {
        Excel::import(new BorrowsImport,request()->file('file'));
        return back()->with('importSuccess',"Selamat Anda berhasil menginport file!");

    }

     public function show($id)
     {
        $borrow = Borrow::find($id);
        return response()->json([
            'data' => $borrow
        ]);
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

     
    //login
    public function login()
    {
        return view('LoginSystem.login');
    }

    public function register()
    {
        return view('LoginSystem.register');
    }

    public function inputRegister(Request$request)
    {
        //validasi
        $request->validate([
            'name' => 'required|min:3|max:50',
            'username' => 'required|min:3|max:10',
            'email' => 'required',
            'password' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/')->with('success', 'Selamat, anda berhasil membuat akun!');
    }

    public function auth(Request $request)
    {
        $request->validate([
            'username' => 'required|exists:users,username',
            'password' => 'required',
        ],
        [
            'username.exists' => "Username ini tidak tersedia"
        ]);

        $user = $request->only('username', 'password');
        if (Auth::attempt($user)) {
            return redirect()->route('index');
        } else {
            return redirect('/')->with('fail', 'Gagal login, silahkan periksa dan coba lagi!');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}


