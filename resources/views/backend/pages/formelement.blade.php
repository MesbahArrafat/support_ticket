@extends('backend.layout.master')

@section('content')
{{-- breadcrumb part start --}}
<div class="bread-crumb-part">
  <div class="row">
    <div class="col-lg-6 small-device-dash">
      <div class="left-title">
        <h3>Dashboard</h3>
      </div>
    </div>
    <div class="col-lg-6 small-device-breadcrumb">
      <div class="right-info text-end">
        <ul>
          <li><a href="index.html">Dashboard</a></li>
          <li>Widget</li>
          <li>Otros buscadores</li>
        </ul>
      </div>
    </div>
  </div>
</div>
{{-- breadcrumb part end --}}

    <!-- content part start -->
    <div class="content-part">
      <div class="inner-content">
        <div class="row">
          <div class="col-lg-3">
            <div class="form-element">
              <label for="" class="d-block w-100">
                Enter your name <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Please insert your name here" data-bs-original-title="" title=""><i class="fa-solid fa-circle-info"></i></span>
              </label>
              <input type="text" placeholder="Enter your name">
            </div>
          </div>
          <div class="col-lg-3">
            <div class="form-element d-flex flex-wrap">
              <label for="" class="d-block w-100">
               Upload your image <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Please insert your name here" data-bs-original-title="" title=""><i class="fa-solid fa-circle-info"></i></span>
              </label>
              <div class="image-box position-relative">
                <img src="{{asset('backend/images/prf.png')}}" alt="prf">
                <!-- <i class="bi bi-x position-absolute close"></i> -->
              </div>
              <div class="upload-box">
                <input class="d-none" type="file" id="file">
                <label for="file"><i class="bi bi-cloud-arrow-up-fill"></i> Upload image</label>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="file-upload">
              <div class="image">
                <img src="{{asset('backend/images/pdf.png')}}" alt="pdf">
              </div>
              <div class="upload-box">
                <input class="d-none" type="file" id="file">
                <label for="file"> Upload file</label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content part end -->



@endsection 