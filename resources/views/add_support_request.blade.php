@extends('backend.layout.master')
@section('content')
<div class="container">
   <h1 class="text-center mt-3"><i class="fa-regular fa-address-card"></i> Support Request Information</h1>
   <div class="row py-5 align-items-center">
       <!-- For Demo Purpose -->
       
       <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
           <img src="https://bootstrapious.com/i/snippets/sn-registeration/illustration.svg" alt="" class="img-fluid mb-3 d-none d-md-block">
           
           <p class="font-italic text-muted mb-0">Create an user for future support.This software ctrated only sum of the user request.</p><br><br>
           
       </div>

       <!-- Registeration Form -->
       <div class="col-md-7 col-lg-7 ml-auto">
           <form action="{{route('storeSupportRequest')}}" method="post">
               @csrf
               <div class="row">

                <!-- customer id -->
                <input type="hidden" name="customer_id" value="{{auth()->user()->id}}" >
                
                     <!-- Project Name -->
                     <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa-sharp fa-solid fa-diagram-project"></i>
                            </span>
                        </div>
                        <select name="project_id" class="form-control custom-select bg-white border-left-0 border-md" required>
                            <option value="">Select Project Name</option>

                            @foreach($projects as $project)
                            <option value="{{ $project->id }}"  class="form-control">{{ $project->name }}</option>
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
                        <select name="category_id" class="form-control custom-select bg-white border-left-0 border-md" required>
                            <option value="">Select Support Category</option>

                            @foreach($categories as $category)
                            <option value="{{ $category->id }}"  class="form-control">{{ $category->name }}</option>
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
                       <input type="text" name="description" placeholder="Description" class="form-control bg-white border-left-0 border-md" required>
                   </div>

                   <div class="form-group col-lg-12 mx-auto mb-0">
                       <div class="col-lg-12 py-2">
                           <button class="btn btn-primary w-100 font-weight-bold">Create Support Request</button>
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

