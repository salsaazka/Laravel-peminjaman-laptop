@extends('layout')

@section('content')

<div class="container d-flex justify-content-center mt-5 pt-5">

  <div class="card p-3 card-1">
   
      <div class="info d-flex justify-content-between align-items-center">

          <div class="group d-flex flex-column">

              <span class="font-weight-bold"><img src="{{ asset('assets/img/wikrama.jpeg') }}" style="width: 80"> Data Peminjaman Laptop</span>
              <small>14 students in the group</small>

          </div>

          <i class="fa fa-bell-o"></i>

      </div>


      <div class="card bg-primary p-3 mt-3 card-2 px-4 text-white py-5">

          <div class="info d-flex justify-content-between align-items-center">

          <div class="group d-flex flex-column text-white">

              <span class="font-weight-bold"></span>
              <small>14 students from your group are online</small>

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


</div>
  @endsection
