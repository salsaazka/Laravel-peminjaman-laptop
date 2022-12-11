@extends('layout')

 @section('content')
 <div class="container overflow-hidden text-center mt-5">
    @if (Session::get('successAdd'))
    <div class="alert alert-success w-100">
       {{ Session::get('successAdd') }}
    </div>  
  @endif
  <div class="d-flex justify-content-start pb-3">
    <a href="/create" class="btn btn-primary new"><i class="fas fa-backward"></i> Back</a>
    
  </div>
  <div class="card">
        <div class="table table-responsive ">
            <table class="table table-hover table-bordered table-stiped ">
                <thead>
                    <tr>
                        <th scope="col-6">NIS</th>
                                <th scope="col-6">Name</th>
                                <th scope="col-6">Region</th>
                                <th scope="col-6">Purpose</th>
                                <th scope="col-6">Ket</th>
                                <th scope="col-6">Date</th>
                                <th scope="col-6">Teacher</th>
                                <th scope="col-6">Return Date</th>
                                <th scope="col-6">Action</th>
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
                                    <button type="submit" class="fas fa-trash btn" ></button>
                                  </form>
                            </div>
                            <div class="ml-auto">
                                <form action="{{ route('update', $borrow->id) }}" method="POST">
                                    @method('PATCH')
                                    @csrf
                                    <button type="submit" style="border: none; background:none;">
                                        <i class="fas fa-arrow-right btn"> </i>
                                    </button>
                                      
                                </form>
                                
                            </div>
                        </td>
                    </tr>
                 @endforeach 
                </tbody>
                
            </table>
            
        </div>
     </div>
    </div>
  @endsection
