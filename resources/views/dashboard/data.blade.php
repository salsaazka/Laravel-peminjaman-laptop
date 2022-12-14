@extends('layout')

 @section('content')
 <div class="container overflow-hidden text-center mt-5">
    @if (Session::get('successAdd'))
    <div class="alert alert-success w-100">
       {{ Session::get('successAdd') }}
    </div>  
  @endif
  @if (Session::get('importSuccess'))
    <div class="alert alert-success w-100">
       {{ Session::get('importSuccess') }}
    </div>  
  @endif
  <div class="justify-content-start pb-2">
    <a href="/home" class="btn btn-info new"><i class="fas fa-backward"></i> Back to Home</a>
    <a href="/create" class="btn btn-primary new" target="_blank"><i class="fas fa-backward"></i> Back to Form</a>
    <a href="/borrows/pdf" class="btn btn-warning " target="_blank">Export PDF</a>
    <a href="/borrows/excel" class="btn btn-success " target="_blank">Export Excel</a>
  </div>
  <div class="container">
    <div class="card w-100" style="margin-top: 3rem; margin-bottom: 2rem">
        <div class="p-4">
            <div class="d-flex justify-content-between">
                <div>
                    <h6 class="text-primary mb-1">Lab RPL/PPLG</h6>
                    <h6 class="text-muted">Laptop Landing</h6>
                </div>
                <div>
                    <img src="{{ asset('assets/img/wikrama.jpeg') }}">
                </div>
            </div>
            <div class="d-flex justify-content-center" style="margin-top: -1rem">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <img src="{{ asset('assets/img/rpl.png') }}" style="width: 110px; height: 110px">
                </div>
            </div>
            
        <form action="{{ route('import.excel') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-10">
                    <input type="file" name="file" class="form-control">
                </div>
                <div class="col-2">
                    <button type="submit" class="btn btn-success">Import User Data</button>
                </div>
            </div>       
        </form>
            <div class="card">
                <div class="container table table-responsive ">
                    <table class="table table-hover table-bordered table-stiped ">
                        <thead>
                            <tr>
                                <th><h6>NIS</h6></th>
                                <th><h6>Name</h6></th>
                                <th><h6>Region</h6></th>
                                <th><h6>Purposes</h6></th>
                                <th><h6>Ket</h6></th>
                                <th><h6>Date</h6></th>
                                <th><h6>Teacher</h6></th>
                                <th><h6>Return Date</h6></th>
                                <th><h6>Action</h6></th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach ($borrows as $borrow )
                            <tr>
                                <td>{{ $borrow['nis'] }}</td>
                                <td>{{ $borrow['name'] }}</td>
                                <td>{{ $borrow['region'] }}</td>
                                <td>{{ $borrow ['purposes']}}</td>
                                <td>{{ $borrow['ket'] }}</td>
                                <td>{{ \Carbon\Carbon::parse ($borrow['date'])->format('j F, Y') }}</td>
                                <td>{{ $borrow['teacher'] }}</td>
                                <td> <p class="text-muted"><span class="date">{{ 
                                is_null($borrow['done_time']) ? '-' : \Carbon\Carbon::parse($borrow['done_time'])->format('j F, Y') 
                                }}</span></p></td>
                                <td>
    
                                    <div class="ml-auto"> 
                                            <form action="{{ route('delete', $borrow['id']) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                            <button type="submit" class="fa-sharp fa-solid fa-delete-left" style="border:none;  background:none;"> </button>
                                          </form>
                                    </div>
                                    <div class="ml-auto">
                                        @if (is_null($borrow['done_time']))
                                        
                                        <form action="{{ route('update', $borrow->id) }}" method="POST">
                                            @method('PATCH')
                                            @csrf
                                            <button type="submit" class="fa-sharp fa-solid fa-arrow-rotate-left" 
                                             style="border: none; background:none;">
                                            </button> 
                                        </form>  
                                        @endif
                                        <button style="padding-left: 7px" class="text-dark btn btn-outline-none" data-bs-toggle="modal" data-bs-target="#detail" id="detailData" data-id="{{ $borrow['id'] }}">
                                            <i class="fa-sharp fa-solid fa-eye"></i></button>
                                    </div>
                                </td>
                            </tr>
                         @endforeach 
                        </tbody>
                    </table> 
                    {{ $borrows->links() }}
                </div>
             </div>
            </div>
        </div>
    </div>
  </div>
<!-- Modal -->
<div class="modal fade" id="detail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Detail Peminjaman</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="look">
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
 
  @endsection
