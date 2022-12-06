@extends('layout')

@section('content')

<div class="col-6 mt-3">
    <div class="card pt-3" style="width: 80;">
      <div class="card-body">
        {{-- <h5 class="card-title">Peminjaman Laptop</h5> --}}
        <h6 class="card-subtitle mb-2 text-muted"><img src="{{ asset('assets/img/rpl.png') }}" style="width: 80">  SMK Wikrama Bogor</h6>
        <form action="/store" method="POST">
          @csrf
          @method('POST')
        <h3></h3>
        
          <div class="form-outline mt-3 mb-3">
              <label class="form-label" for="form1Example23">Name</label>
              <input type="text" name=" name" class="form-control form-control-lg" placeholder="" />
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Purpose</label>
              <textarea type="text" name="purpose" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Ket</label>
              <textarea type="text" name="ket" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
         
              <div class="mb-3">
                <div class="row justify-content-around">
                  <div class="col-6">
                      <label for="exampleFormControlTextarea1" class="form-label">NIS</label>
                      <input type="number" name="nis" class="form-control form-control-lg" placeholder="" />
                  </div>
                  <div class="col-6">
                      <label for="exampleFormControlTextarea1" class="form-label">Region</label>
                      <select class="form-select" aria-label="Default select example" name="region">
                          <option selected>--Select--</option>
                          <option value="1">Cis 1</option>
                          <option value="2">Cis 2</option>
                          <option value="3">Cis 3</option>
                          <option value="4">Cis 4</option>
                          <option value="5">Cis 5</option>
                          <option value="6">Cic 1</option>
                          <option value="7">Cic 2</option>
                          <option value="8">Cic 3</option>
                          <option value="9">Cic 4</option>
                          <option value="10">Cic 5</option>
                          <option value="11">Cic 6</option>
                          <option value="12">Cic 7</option>
                        </select>
                  </div>
                </div>
                <span>
                  <a href="{{route('index')}}" class="text-success"><i class="fa-solid fa-plus"></i> Create</a> | <a href="{{route('todo.complated')}}"><i class="fa-solid fa-check-to-slot"></i> Complated</a>
              </span>
      </form>
        {{-- <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a> --}}
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card pt-3" style="width: 80;">
      <div class="card-body">
         <i class="fa-duotone fa-right-left"></i>
         <i class="fa-solid fa-arrow-right-from-bracket"></i>
      </div>
    </div>
  </div>
  @endsection