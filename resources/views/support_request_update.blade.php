@extends('backend.layout.master')
@section('content')
<div class="container">
    <h2 class="py-5 text-center">Support Request Details</h2>
    <div class="row">
        <div class="col-md-8 mt-4 m-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">{{$post->project->name}}</h3>
                </div>
                <div class="card-body">
                    @if(auth()->user()->role == 1)
                    <p><b>Customer Name : </b>{{$post->user->name}}</p>
                    @endif
                    <p><b>Support Category : </b>{{$post->category->name}}</p>
                    <p><b>Status : </b>
                        <?php
                            $s = $post->status;
                            
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
                    @if(auth()->user()->role != 3)
                    <p><b>Assign Employee : </b>{{$post->employee->name}}</p>
                    @endif
                    <p><b>Description :</b> {{$post->description}}</p>

                  


                    {{-- comment validation error --}}
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                   @endif

                    {{-- -------------comment section start--------------------}}
                    <h4 class="mt-3">Add Comment</h4>
                    <form method="post" action="{{ route('comments.store')}}">
                        @csrf
                        <div class="form-group">
                            <textarea class="form-control" name="body" placeholder="Leave a comment......" ></textarea>
                            <input type="hidden" name="post_id" value="{{ $post->id }}" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success mt-2" value="Add Comment"/>
                        </div>
                    </form>
                    {{-- ---------------comment section end----------------- --}}


                </div>

                @include('include.comments', ['comments' => $post->comments, 'post_id' => $post->id])

            </div>
        </div>
    </div>
    <br>
    <br>
</div>
@endsection

