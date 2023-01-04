@extends('backend.layout.master')
@section('content')
    <div class="container">
        <h2 class="py-5 text-center">Support Request List</h2>
        <div class="row">
            @foreach($support_requests as $data)
            <div class="col-md-4 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">{{$data->project->name ?? ''}}</h3>
                    </div>
                    <div class="card-body">
                        <p><b>Customer Name : </b>{{ $data->user->name ?? '' }}</p> 
                        <p><b>Support Category :</b> {{$data->category->name ?? ''}}</p> 
                        <p><b>Description :</b> {{$data->description}}</p> 
                        <p><b>Assign Employee : </b> {{$data->employee->name ?? ''}}</p> 
                        <p><b>Status : </b> 
                            <?php
                            $s = $data->status;
                            
                            if ($s == 0) {
                              echo "Pending";
                            } elseif ($s == 1) {
                              echo "On Process";
                            }
                            else {
                              echo "Resolve";
                            }
                            ?>
                        </p> 
                        
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <br>
        <br>
        {{ $support_requests->links() }}
    </div>
    @endsection 

