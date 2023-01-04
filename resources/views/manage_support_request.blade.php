@extends('backend.layout.master')
@section('content')
     <div class="container">
        <h2 class="text-center py-5">All Support Ticket List</h2>
        <table class="table table-hover">
            <thead>
                <tr class="table-dark">
                    <th>Id</th>
                    <th>Project Name</th>

                    @if(auth()->user()->role != 3)
                    @if(auth()->user()->role != 2)
                    <th>Customer Name</th>
                    @endif
                    @endif

                    <th>Support Category</th>
                    <th>Status</th>

                    @if(auth()->user()->role != 3)
                    <th>Assign Employee</th>
                    @endif

                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php $sl = 1?>
                @foreach($support_requests as $data)
                    <tr>
                        <td>{{$sl}}</td>
                        <td>{{$data->project->name ?? ''}}</td>

                        @if(auth()->user()->role != 3)
                        @if(auth()->user()->role != 2)
                        <td>{{$data->user->name ?? ''}}</td>
                        @endif
                        @endif

                        <td>{{$data->category->name ?? ''}}</td>
                        <td>
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
                        </td>

                        @if(auth()->user()->role != 3)
                        <td>{{$data->employee->name ?? ''}}</td>
                        @endif

                        <td>
                            <a href="{{route('viewSupportRequestUpdate', $data->id)}}" class="btn btn-info btn-sm mx-1 text-white"><i class="fa-solid fa-eye"></i></a>
                            <a href="{{route('editSupportRequest', $data->id)}}" class="btn btn-success btn-sm mx-1"><i class="fa-solid fa-pen-to-square"></i></a>
                            {{-- <a href="{{route('#', $data->id)}}" class="btn btn-success btn-sm mx-1"><i class="fa-solid fa-eye"></i></a> --}}
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
                                    Are you sure to <b>DELETE</b> This <b>Request</b>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <a href="{{route('deleteSupportRequest', $data->id)}}" class="btn btn-danger">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>
        {{ $support_requests->links() }}
    </div>
    @endsection 

