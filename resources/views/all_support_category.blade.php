@extends('backend.layout.master')
@section('content')
    <div class="container">
        <h2 class="py-5 text-center">Support Category List</h2>
        <div class="row">
            @foreach($projects as $data)
            <div class="col-md-4 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">{{$data->name}}</h3>
                    </div>
                    <div class="card-body">
                        <p><b>Description:</b> {{$data->description}}</p> 
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endsection 

