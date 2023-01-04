@extends('backend.layout.master')
@section('content')
    <div class="container">
        <h2 class="py-5 text-center">Users List</h2>
        <div class="row">
            @foreach($users as $data)
            <div class="col-md-4">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="text-center">{{$data->name}}</h3>
                    </div>
                    <div class="card-body">
                        <p><b>Email:</b> {{$data->email}}</p>
                        <p><b>Role:</b>
                            <?php
                            $t = $data->role;
                            
                            if ($t == 1) {
                              echo "Admin";
                            } 
                            else if ($t == 2) {
                              echo "Employee";
                            }
                            else {
                              echo "Customer";
                            }
                            ?>
                        </p>
                        <p><b>Status:</b>
                            <?php
                            $t = $data->status;
                            
                            if ($t == 1) {
                              echo "Active";
                            } else {
                              echo "Deactive";
                            }
                            ?>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endsection 

