@extends('backend.layout.master')
@section('content')
     <div class="container">
        <h2 class="text-center py-5">Manage Support Category</h2>
        <table class="table table-hover">
            <thead>
                <tr class="table-dark">
                    <th>Id</th>
                    <th>Support Category Name</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php $sl = 1?>
                @foreach($projects as $data)
                    <tr>
                        <td>{{$sl}}</td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->description}}</td>

                        {{  $data->id}}

                        <td>
                            <a href="{{route('editSupportCategory', $data->id)}}" class="btn btn-success btn-sm mx-1"><i class="fa-solid fa-pen-to-square"></i></a>
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
                                    <a href="{{route('deleteSupportCategory', $data->id)}}" class="btn btn-danger">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection 

