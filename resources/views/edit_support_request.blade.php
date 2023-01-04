{{-- @extends('backend.layout.master')
@section('content')
  <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2 class="text-center py-5"><i class="fa-solid fa-pen-to-square"></i> Update Support Request</h2>
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('updateSupportRequest',$user->id)}}" method="post">
                            @csrf
                            <div class="form-group row mb-3">
                                <div class="col-md-4">
                                    <label for="project_id" class="form-label">Project Name:</label>
                                </div>
                                <select class="col-md-8" name="project_id" required @if(auth()->user()->role !== 3) disabled="disabled" @endif >
                                    <option class="form-control">---Select Project Name---</option>
                                    @foreach($projects as $project)
                                        <option value="{{ $project->id }}"  class="form-control" selected>{{ $project->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group row mb-3">
                                <div class="col-md-4">
                                    <label for="category_id" class="form-label">Support Category:</label>
                                </div>
                                <select class="col-md-8" name="category_id" @if(auth()->user()->role !== 3) disabled="disabled" @endif required>
                                    <option class="form-control">---Select Support Category---</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}"  class="form-control" selected>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group row mb-3">
                                <div class="col-md-4">
                                    <label for="description" class="form-label">Description:</label>
                                </div>
                                <div class="col-md-8">
                                    <input value="{{$user->description}}" type="text" name="description" class="form-control" required @if(auth()->user()->role !== 3) disabled="disabled" @endif>
                                </div>
                            </div>


                            @if(auth()->user()->role != 3)
                            <div class="form-group row mb-3">
                                <div class="col-md-4">
                                    <label for="status" class="form-label">Status:</label>
                                </div>
                                <div class="col-md-8">
                                    <select name="status" class="form-control" required>
                                        <option class="form-control">Select Status</option>
                                        <option value="0" class="form-control" selected>Pending</option>
                                        <option value="1" class="form-control" selected>On Process</option>
                                        <option value="2" class="form-control" selected>Resolve</option>
                                    </select>
                                </div>
                            </div>
                            @endif
                            @if(auth()->user()->role == 1)
                            <div class="form-group row mb-3">
                                <div class="col-md-4">
                                    <label for="employee_id" class="form-label">Assigned Employee:</label>
                                </div>
                                <select class="col-md-8" name="employee_id" required>
                                    <option class="form-control">Select Employee</option>
                                    @foreach($employees as $employee)
                                        <option value="{{ $employee->id }}"  class="form-control" selected>{{ $employee->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @endif


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
       <h1 class="text-center mt-3"><i class="fa-solid fa-pen-to-square"></i> Update</h1>
       <div class="row py-5 align-items-center">
           <!-- For Demo Purpose -->
           
           <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
               <img src="https://bootstrapious.com/i/snippets/sn-registeration/illustration.svg" alt="" class="img-fluid mb-3 d-none d-md-block">
               
               <p class="font-italic text-muted mb-0">Create an user for future support.This software ctrated only sum of the user request.</p><br><br>
               
           </div>
   
           <!-- Registeration Form -->
           <div class="col-md-7 col-lg-7 ml-auto">
               <form action="{{route('updateuser',$user->id)}}" method="post">
                   @csrf
                   <div class="row">
   
                    <!-- project Name -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa-sharp fa-solid fa-diagram-project"></i>
                            </span>
                        </div>
                        <select name="project_id" class="form-control custom-select bg-white border-left-0 border-md" @if(auth()->user()->role !== 3) disabled="disabled" @endif required>
                            <option value="">Select Project Name</option>
                            @foreach($projects as $project)
                              <option value="{{ $project->id }}" selected>{{ $project->name }}</option>
                            @endforeach
                        </select>
                    </div>


                    <!-- Support Category -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa-solid fa-bolt"></i>
                            </span>
                        </div>
                        <select name="category_id" class="form-control custom-select bg-white border-left-0 border-md" @if(auth()->user()->role !== 3) disabled="disabled" @endif required>
                            <option value="">Select Project Name</option>
                            @foreach($categories as $category)
                              <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                     <!-- description -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-envelope text-muted"></i>
                            </span>
                        </div>
                        <input value="{{$user->description}}" type="text" name="description" placeholder="Description" class="form-control bg-white border-left-0 border-md" @if(auth()->user()->role !== 3) disabled="disabled" @endif required>
                    </div>

                       <!-- status -->
                       @if(auth()->user()->role != 3)
                       <div class="input-group col-lg-12 mb-4">
                           <div class="input-group-prepend">
                               <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa-solid fa-gears"></i>
                               </span>
                           </div>
                           <select name="status" class="form-control custom-select bg-white border-left-0 border-md" required>
                               <option value="">Select Status</option>
                               <option value="0" selected>Pending</option>
                               <option value="1" selected>On Process</option>
                               <option value="2" selected>Resolve</option>
                           </select>
                       </div>
                       @endif


   
                        <!-- Assign Employee -->
                        @if(auth()->user()->role == 1)
                        <div class="input-group col-lg-12 mb-4">
                           <div class="input-group-prepend">
                               <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa-sharp fa-solid fa-person"></i>
                               </span>
                           </div>
                           <select name="employee_id" class="form-control custom-select bg-white border-left-0 border-md" required>
                               <option value="">Select Employee</option>
                               @foreach($employees as $employee)
                               <option value="{{ $employee->id }}"selected>{{ $employee->name }}</option>
                           @endforeach
                           </select>
                         </div>
                         @endif
   
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
   <script>// For Demo Purpose [Changing input group text on focus]
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


