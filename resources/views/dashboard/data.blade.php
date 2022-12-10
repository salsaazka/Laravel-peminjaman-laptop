@extends('layout')

 @section('content')
 <div class="container overflow-hidden text-center mt-5">
    @if (Session::get('successAdd'))
    <div class="alert alert-success w-100">
       {{ Session::get('successAdd') }}
    </div>  
  @endif
    <div class="card">
        <table class="table table-hover table-responsive table-bordered table-stiped ">
            <thead>
                <tr>
                    <th scope="col">NIS</th>
                            <th >Name</th>
                            <th >Region</th>
                            <th >Purpose</th>
                            <th >Ket</th>
                            <th >Date</th>
                            <th >Teacher</th>
                            <th >Return Date</th>
                            <th >Action</th>
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
  @endsection
