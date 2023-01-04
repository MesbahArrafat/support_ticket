{{-- @extends('backend.layout.master')
@section('content')
  <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2 class="text-center py-5"><i class="fa-solid fa-pen-to-square"></i> Update Project information</h2>
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('updateproject',$project->id)}}" method="post">
                            @csrf
                            <div class="form-group row mb-3">
                                <div class="col-md-4">
                                    <label for="name" class="form-label">Project Name:</label>
                                </div>
                                <div class="col-md-8">
                                    <input value="{{$project->name}}" type="text" name="name" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <div class="col-md-4">
                                    <label for="" class="form-label">Customer Name:</label>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <div class="col-md-4">
                                    <label for="description" class="form-label">Project Description:</label>
                                </div>
                                <div class="col-md-8">
                                    <input value="{{$project->description}}" type="text" name="description" class="form-control" required>
                                </div>
                            </div>
                            
                            <div class="form-group row mb-3">
                                <div class="col-md-4">
                                    <label for="status" class="form-label">Status:</label>
                                </div>
                                <div class="col-md-8">
                                    <select name="status" class="form-control" required>
                                        <option value="0" @if ($project->status == 0) selected @endif>-------Set Status-------</option>
                                        <option value="1" @if ($project->status == 1) selected @endif>Active</option>
                                        <option value="2" @if ($project->status == 2) selected @endif>Deactive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <div class="col-md-4">
                                </div>
                                <div class="col-md-8">
                                    <button class="btn btn-success w-100">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection  --}}




 @extends('backend.layout.master')
@section('content')
<div class="container">
   <h1 class="text-center mt-3"><i class="fa-solid fa-pen-to-square"></i> Update Project Details</h1>
   <div class="row py-5 align-items-center">
       <!-- For Demo Purpose -->
       
       <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
           <img src="https://bootstrapious.com/i/snippets/sn-registeration/illustration.svg" alt="" class="img-fluid mb-3 d-none d-md-block">
           
           <p class="font-italic text-muted mb-0">Create an user for future support.This software ctrated only sum of the user request.</p><br><br>
          
       </div>

       <!-- Registeration Form -->
       <div class="col-md-7 col-lg-7 ml-auto">
           <form action="{{route('updateproject',$project->id)}}" method="post">
               @csrf
               <div class="row">

                   <!--project Name -->
                   <div class="input-group col-lg-12 mb-4">
                       <div class="input-group-prepend">
                           <span class="input-group-text bg-white px-4 border-md border-right-0">
                               <i class="fa fa-user text-muted"></i>
                           </span>
                       </div>
                       <input value="{{$project->name}}" type="text" name="name" placeholder="Project Name" class="form-control bg-white border-left-0 border-md" required>
                   </div>

                 <!-- Customer Name -->
                 {{-- <div class="input-group col-lg-12 mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-white px-4 border-md border-right-0">
                            <i class="fa fa-black-tie text-muted"></i>
                        </span>
                    </div>
                    <select name="user_id" class="form-control custom-select bg-white border-left-0 border-md" required>
                        <option value="">Select your name</option>
                        @foreach($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div> --}}
                
                   <!-- description -->
                   <div class="input-group col-lg-12 mb-4">
                       <div class="input-group-prepend">
                           <span class="input-group-text bg-white px-4 border-md border-right-0">
                               <i class="fa fa-envelope text-muted"></i>
                           </span>
                       </div>
                       <input  value="{{$project->description}}" type="text" name="description" placeholder="Description" class="form-control bg-white border-left-0 border-md" required>
                   </div>


                  <!-- status -->
                  <div class="input-group col-lg-12 mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-white px-4 border-md border-right-0">
                            <i class="fa fa-black-tie text-muted"></i>
                        </span>
                    </div>
                    <select name="status" class="form-control custom-select bg-white border-left-0 border-md" required>
                        <option value="">Select your status</option>
                        <option value="1">Active</option>
                        <option value="2">Deactive</option>
                    </select>
                  </div>

                   <div class="form-group col-lg-12 mx-auto mb-0">
                       <div class="col-lg-12 py-2">
                           <button class="btn btn-primary w-100 font-weight-bold">Update</button>
                       </div>
                   </div>

               </div>
           </form>
       </div>
   </div>
</div>
<script>
// For Demo Purpose [Changing input group text on focus]
$(function () {
   $('input, select').on('focus', function () {
       $(this).parent().find('.input-group-text').css('border-color', '#80bdff');
   });
   $('input, select').on('blur', function () {
       $(this).parent().find('.input-group-text').css('border-color', '#ced4da');
   });
});
</script>

@endsection 

