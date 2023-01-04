@extends('backend.layout.master')
@section('content')
    <div class="container">
        <h2 class="py-5 text-center">User Details List</h2>
        <div class="row">
            @foreach($users as $data)
            <div class="col-md-4">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="text-center">{{$data->name}}</h3>
                    </div>
                    <div class="card-body">
                        <p><b>Address:</b> {{$data->address}}</p>
                        <p><b>Contact Number:</b> {{$data->phone}}</p>
                        <p><b>Company Name:</b> {{$data->company_name}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endsection 

