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

<div class="content-part">
    <div class="inner-content">
      <div class="view-page">
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-xl-3">
               <div class="left-info">
                <div class="image">
                  <img src="{{asset('backend/images/prf.png')}}" alt="prf" class="img-fluid w-100">
                </div>
                <div class="file">
                  <a href=""><i class="fa-solid fa-download"></i> View File</a>
                </div>
               </div>
              </div>
              <div class="col-xl-9">
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <th>Tender Name</th>
                      <td>:</td>
                      <td colspan="2">Larry the Bird</td>
                    </tr>
                    <tr>
                      <th>Tender Name</th>
                      <td>:</td>
                      <td colspan="2">Larry the Bird</td>
                    </tr>
                    <tr>
                      <th>Tender Name</th>
                      <td>:</td>
                      <td colspan="2">Larry the Bird</td>
                    </tr>
                    <tr>
                      <th>Tender Name</th>
                      <td>:</td>
                      <td colspan="2">Larry the Bird</td>
                    </tr>
                    <tr>
                      <th>Tender Name</th>
                      <td>:</td>
                      <td colspan="2">Larry the Bird</td>
                    </tr>
                    <tr>
                      <th>Tender Name</th>
                      <td>:</td>
                      <td colspan="2">Larry the Bird</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-xl-3">
               <div class="left-info">
                <div class="image">
                  <img src="{{asset('backend/images/prf.png')}}" alt="prf" class="img-fluid w-100">
                </div>
                <div class="file">
                  <a href=""><i class="fa-solid fa-download"></i> View File</a>
                </div>
               </div>
              </div>
              <div class="col-xl-9">
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <th>Tender Name</th>
                      <td>:</td>
                      <td colspan="2">Larry the Bird</td>
                    </tr>
                    <tr>
                      <th>Tender Name</th>
                      <td>:</td>
                      <td colspan="2">Larry the Bird</td>
                    </tr>
                    <tr>
                      <th>Tender Name</th>
                      <td>:</td>
                      <td colspan="2">Larry the Bird</td>
                    </tr>
                    <tr>
                      <th>Tender Name</th>
                      <td>:</td>
                      <td colspan="2">Larry the Bird</td>
                    </tr>
                    <tr>
                      <th>Tender Name</th>
                      <td>:</td>
                      <td colspan="2">Larry the Bird</td>
                    </tr>
                    <tr>
                      <th>Tender Name</th>
                      <td>:</td>
                      <td colspan="2">Larry the Bird</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection 