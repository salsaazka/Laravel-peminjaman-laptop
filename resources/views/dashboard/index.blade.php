@extends('layout')

@section('content')
    <center>
        <div class="container">
            <div class="card w-75" style="margin-top: 3rem; margin-bottom: 2rem">
                <div class="p-4">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h6 class="text-muted mb-1">Lab RPL/PPLG</h6>
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
                    <div class="row mt-3">
                        <div class="col-6">
                            <div class="card card2">
                                <div class="card-body">
                                    <center class="mt-3">
                                        <img src="{{ asset('assets/img/data.png') }}" style="width: 250px; height: 100%">
                                        <br>
                                        <h3 class="mt-4 fw-semibold text-primary">Table Data</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, at. Fugit, eveniet impedit culpa eum architecto saepe modi eaque provident tempora necessitatibus deleniti veritatis repellendus sequi reprehenderit! Possimus, soluta perspiciatis.</p>
                                        <a href="{{ route('data') }}" class="btn btn-primary mt-2 mb-2">View Data</a>
                                    </center>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card card2">
                                <div class="card-body">
                                    <center class="mt-3">
                                        <img src="{{ asset('assets/img/form.png') }}" style="width: 250px; height: 100%">
                                        <br>
                                        <h3 class="mt-4 fw-semibold text-primary">Input Data</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, at. Fugit, eveniet impedit culpa eum architecto saepe modi eaque provident tempora necessitatibus deleniti veritatis repellendus sequi reprehenderit! Possimus, soluta perspiciatis.</p>
                                        <a href="{{ route('create') }}" class="btn btn-primary mt-2 mb-2">Input Data</a>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </center>

    {{-- <div class="container d-flex justify-content-center mt-5 pt-5">

  <div class="card p-3 card-1">

      <div class="info d-flex justify-content-between align-items-center">

          <div class="group d-flex flex-column">

              <span class="font-weight-bold"><img src="{{ asset('assets/img/wikrama.jpeg') }}" style="width: 80"> Data Peminjaman Laptop
              </span>

              Illustration by <a href="https://icons8.com/illustrations/author/zD2oqC8lLBBA">Icons 8</a> from <a href="https://icons8.com/illustrations">Ouch!</a>


          </div>

          <i class="fa fa-bell-o"></i>

      </div>


      <div class="card bg-primary p-3 mt-3 card-2 px-4 text-white py-5">

          <div class="info d-flex justify-content-between align-items-center">

          <div class="group d-flex flex-column text-white">

              <span class="font-weight-bold"></span>
              <small><b>Welcome! Click Here</b></small>

          </div>
          <a href="{{ route('create') }}">
          <i class="fa fa-angle-right text-white"></i>
          </a>
      </div>

      </div>


       <div class="info d-flex justify-content-between mt-3">

          <div class="group d-flex flex-column">

              <span class="font-weight-bold">Today's Lession</span>
              <small>Unit-6 Articles</small>

          </div>

          <small>12:00 PM</small>

      </div>



  </div>


</div> --}}
@endsection
