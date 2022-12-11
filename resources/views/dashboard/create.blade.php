@extends('layout')

@section('content')
@if (Session::get('successUpdate'))
<div class="alert alert-success w-100">
   {{ Session::get('successUpdate') }}
</div>  
@endif
    <div class="d-flex justify-content-center">
        <div class="container">
            <div class="card w-100" style="top: 3rem; margin-bottom: 6.5rem">
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

                            <a class="text-muted mt-1 text-decoration-none" href="{{ route('index') }}">Laptop Landing >> 
                            <span class="text-primary">Create </span>
                        </a>
                            
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-12">
                            <h5>Form Input</h5>
                            <form action="{{ route('store') }}" method="post" class="mt-4">
                                @csrf
                                @method('POST')
                                <div class="form-outline mb-1">
                                    <label class="form-label text-muted" for="form1Example23">Name</label>
                                    <input type="text" name="name" class="form-control"
                                        placeholder="Input name" />
                                </div>
                                <div class="mb-1">
                                    <label class="form-label text-muted">Purpose</label>
                                    <textarea type="text" name="purposes" class="form-control"   placeholder="Input purposes" rows="3"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label text-muted">Ket</label>
                                    <textarea type="text" name="ket" class="form-control"   placeholder="Input Ket"rows="3"></textarea>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-6">
                                        <label class="form-label text-muted">NIS</label>
                                        <input type="number" name="nis" class="form-control" placeholder="Input NIS" />
                                    </div>
                                    <div class="col-6">
                                        <label
                                            class="form-label text-muted">Region</label>
                                        <select class="form-select" aria-label="Default select example" name="region">
                                            <option selected>--Select--</option>
                                            <option value="Cis 1">Cis 1</option>
                                            <option value="Cis 2">Cis 2</option>
                                            <option value="Cis 3">Cis 3</option>
                                            <option value="Cis 4">Cis 4</option>
                                            <option value="Cis 5">Cis 5</option>
                                            <option value="Cic 1">Cic 1</option>
                                            <option value="Cic 2">Cic 2</option>
                                            <option value="Cic 3">Cic 3</option>
                                            <option value="Cic 4">Cic 4</option>
                                            <option value="Cic 5">Cic 5</option>
                                            <option value="Cic 6">Cic 6</option>
                                            <option value="Cic 7">Cic 7</option>
                                            <option value="Cia 1">Cia 1</option>
                                            <option value="Cia 2">Cia 2</option>
                                            <option value="Cia 3">Cia 3</option>
                                            <option value="Cia 4">Cia 4</option>
                                            <option value="Cib 1">Cib 1</option>
                                            <option value="Cib 2">Cib 2</option>
                                            <option value="Cib 3">Cib 3</option>
                                            <option value="Taj 1">Taj 1</option>
                                            <option value="Taj 2">Taj 2</option>
                                            <option value="Taj 3">Taj 3</option>
                                            <option value="Taj 4">Taj 4</option>
                                            <option value="Wik 1">Wik 1</option>
                                            <option value="Wik 2">Wik 2</option>
                                            <option value="Wik 3">Wik 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label  class="form-label text-muted">Date</label>
                                            <input type="date" name="date" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-4">
                                            <label class="form-label text-muted">Teacher Name</label>
                                            <input type="text" name="teacher" class="form-control" placeholder="Input teacher">
                                        </div>
                                    </div>
                                </div> 
                                
                                <div class="d-flex justify-content-end">
                                    <a href="{{ route('index') }}" class="btn btn-secondary me-1"><i class="fa-solid fa-circle-chevron-left"></i> Back</a>
                                    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-circle-check"></i> Submit</button>
                                </div>
                            </form>
                            <div class="w-100">
                              
                            </div>
                        </div>
                        <div class="col-6">
                            
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
  
@endsection