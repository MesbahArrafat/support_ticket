
 @extends('backend.layout.master')
 @section('content')
 <div class="container">
    <h1 class="text-center mt-3"><i class="fa-regular fa-address-card"></i> Create an User</h1>
    <div class="row py-5 align-items-center">
        <!-- For Demo Purpose -->
        
        <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
            <img src="https://bootstrapious.com/i/snippets/sn-registeration/illustration.svg" alt="" class="img-fluid mb-3 d-none d-md-block">
            
            <p class="font-italic text-muted mb-0">Create an user for future support.This software ctrated only sum of the user request.</p><br><br>
            
        </div>

        <!-- Registeration Form -->
        <div class="col-md-7 col-lg-7 ml-auto">
            <form action="{{route('userstore')}}" method="post">
                @csrf
                <div class="row">

                    <!-- Name -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                        </div>
                        <input type="text" name="name" placeholder="User Name" class="form-control bg-white border-left-0 border-md" required>
                    </div>

                    <!-- Email Address -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-envelope text-muted"></i>
                            </span>
                        </div>
                        <input type="email" name="email" placeholder="Email Address" class="form-control bg-white border-left-0 border-md" required>
                    </div>

                    <!-- Phone Number -->
                    <!-- <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-phone-square text-muted"></i>
                            </span>
                        </div>
                        <select id="countryCode" name="countryCode" style="max-width: 80px" class="custom-select form-control bg-white border-left-0 border-md h-100 font-weight-bold text-muted">
                            <option value="">+12</option>
                            <option value="">+10</option>
                            <option value="">+15</option>
                            <option value="">+18</option>
                        </select>
                        <input id="phoneNumber" type="tel" name="phone" placeholder="Phone Number" class="form-control bg-white border-md border-left-0 pl-3">
                    </div> -->

                    <!-- Password -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-lock text-muted"></i>
                            </span>
                        </div>
                        <input type="password" name="password" placeholder="Password" class="form-control bg-white border-left-0 border-md" required>
                    </div>

                    <!-- role -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-black-tie text-muted"></i>
                            </span>
                        </div>
                        <select name="role" class="form-control custom-select bg-white border-left-0 border-md" required>
                            <option value="">Select your role</option>
                            <option value="1">Admin</option>
                            <option value="2">Employee</option>
                            <option value="3">Customer</option>
                        </select>
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
                            <button class="btn btn-primary w-100 font-weight-bold">Create your account</button>
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
 {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script> --}}

@endsection 
