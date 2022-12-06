@extends('layout')

@section('content')
<div class="container rounded mt-5 bg-white p-md-5">
    <div class="h2 font-weight-bold"></div>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>                    
                    <th scope="col">Date</th>                    
                    <th scope="col">Time</th>                    
                    <th scope="col">Status</th>                    
                </tr>
            </thead>
            <tbody>
                <tr class="bg-blue">            
                    <td class="pt-2">
                        <div class="pl-lg-5 pl-md-3 pl-1 name"></div>
                    </td>                
                    <td class="pt-3 mt-1"></td>
                    <td class="pt-3"><span class="fa fa-check pl-3"></span></td>
                    <td class="pt-3"><span class="fa fa-ellipsis-v btn"></span></td>
                </tr>
                <tr id="spacing-row">
                    <td></td>
                </tr>
               
            </tbody>
        </table>
    </div>
</div>
@endsection