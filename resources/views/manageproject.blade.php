@extends('backend.layout.master')
@section('content')
     <div class="container">
        <h2 class="text-center py-5">All Project List</h2>
        <table class="table table-hover">
            <thead>
                <tr class="table-dark">
                    <th>Id</th>
                    <th>Project Name</th>
                    <th>User ID</th>
                    {{-- <th>Customer Name</th> --}}
                    <th>Description</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php $sl = 1?>
                @foreach($projects as $data)
                    <tr>
                        <td>{{$sl}}</td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->user_id}}</td>
                        <td>{{$data->description}}</td>

                        <td>@if($data->status == 1) <a href="{{route('updateprojectstatus',$data->id)}}" class="btn btn-primary btn-sm"><i>Active</i></a> @elseif($data->status == 2) <a href="{{route('updateprojectstatus',$data->id)}}" class="btn btn-danger btn-sm"><i>Deactive</i></a> @endif</td>
                        <td>
                            <a href="{{route('editproject', $data->id)}}" class="btn btn-success btn-sm mx-1"><i class="fa-solid fa-pen-to-square"></i></a>
                            <button class="btn btn-danger btn-sm mx-1" data-bs-toggle="modal" data-bs-target="#deleteModal{{$data->id}}"><i class="fa-solid fa-trash-alt"></i></button>
                        </td>
                    </tr>
                    <?php $sl++?>

                    <!-- Modal -->
                    <div class="modal fade" id="deleteModal{{$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Confirmation Message</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure to <b>DELETE</b> This <b>Project?</b>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <a href="{{route('deleteproject', $data->id)}}" class="btn btn-danger">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection 

