{{-- @extends('backend.layout.master')
@section('content')
  <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2 class="text-center py-5"><i class="fa-solid fa-pen-to-square"></i>Update Comment</h2>
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('update.comment',$comment->id)}}" method="post">
                            @csrf
                            <div class="form-group row mb-3">
                                <div class="col-md-4">
                                    <label for="body" class="form-label">Your Comment:</label>
                                </div>
                                <div class="col-md-8">
                                    <input value="{{$comment->body}}" type="text" name="body" class="form-control" required>
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
               <form action="{{route('update.comment',$comment->id)}}" method="post">
                   @csrf
                   <div class="row">
    
                       <!--comment -->
                       <div class="col-md-4">
                        <label for="body" class="form-label"><strong>Your Comment:</strong></label>
                       </div>
                       <div class="input-group col-lg-12 mb-4">
                        
                           <div class="input-group-prepend">
                               <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa-solid fa-comment"></i>
                               </span>
                           </div>
                           <input  value="{{$comment->body}}" type="text" name="body" class="form-control bg-white border-left-0 border-md" required>
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

