@extends('backend.layout.master')
@section('content')
    <div class="container">
        <h2 class="py-5 text-center">Support Request Details</h2>
        <div class="row">
            <div class="col-md-8 mt-4 m-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">{{$support_request->project->name}}</h3>
                    </div>
                    <div class="card-body">
                        @if(auth()->user()->role == 1)
                        <p><b>Customer Name : </b>{{$support_request->user->name}}</p> 
                        @endif
                        <p><b>Support Category : </b>{{$support_request->category->name}}</p> 
                        <p><b>Status : </b> 
                            <?php
                            $s = $support_request->status;
                            
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
                        <p><b>Description :</b> {{$support_request->description}}</p> 
                        @if(auth()->user()->role != 3)
                        <p><b>Assign Employee : </b>{{$support_request->employee->name}}</p> 
                        @endif 

                        <form action="#">
                            <p><label for="comment"><b>Comment : </b></label></p>
                            <textarea id="comment" name="comment" rows="4" cols="90" placeholder="Write Here....."></textarea>
                            <br>
                            <button class="btn btn-info">Submit</button>
                        </form>
                                
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
    </div>
    @endsection 

