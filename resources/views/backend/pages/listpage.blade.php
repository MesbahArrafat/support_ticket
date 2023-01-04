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
        <!-- search header -->
        <div class="search-section">
          <div class="row">
            <div class="col-sm-7 col-lg-9 col-xxl-10">
              <form action="">
                <div class="row">
                  <div class="col-md-6 col-lg-4 col-xl-2">
                    <div class="form-element">
                      <select class="form-select shadow-none" aria-label="Default select example">
                        <option selected="">Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 col-xl-2">
                    <div class="form-element">
                      <input type="text" placeholder="Type here...">
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 col-xl-2">
                    <div class="form-element">
                      <input type="text" placeholder="Type here...">
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 col-xl-2">
                    <div class="form-element">
                      <input type="text" placeholder="Type here...">
                    </div>
                  </div>
                  <div class="col-md-3 col-lg-3 col-xl-2">
                    <button type="submit" class="search-btn">
                      <div class="btn-front"><i class="fa-solid fa-magnifying-glass"></i></div>
                      <div class="btn-back"><i class="fa-solid fa-magnifying-glass"></i></div>
                    </button>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-sm-5 col-lg-3 col-xxl-2 ms-auto">
              <button type="button" class="add-btn d-flex ms-auto" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add Item" data-bs-original-title="" title="">
                <div class="btn-front"><i class="fas fa-plus" aria-hidden="true"></i> item</div>
                <div class="btn-back"><i class="fas fa-plus" aria-hidden="true"></i> item</div>
              </button>
            </div>
          </div>
        </div>
        <!-- table data showing sorting & number of data -->
        <div class="sorting-data mt-sm-4">
          <div class="row">
            <div class="col-sm-6 col-lg-6 align-self-end">
              <div class="showing-number">
                <p> Showing <span class="single-number">1</span> to <span class="single-number">4</span> of <span class="single-number">4</span> entries </p>
              </div>
            </div>
            <div class="col-sm-6 col-lg-6 ms-auto">
              <div class="row">
                <div class="col-sm-6 col-lg-4 col-xl-4 col-xxl-3 align-self-center ms-auto">
                  <div class="form-element mb-0">
                    <select class="form-select sort-number shadow-none" aria-label="Default select example">
                      <option selected="">100</option>
                      <option value="1">10</option>
                      <option value="2">20</option>
                      <option value="3">30</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-5 col-xl-4 col-xxl-3 ps-0 align-self-start align-self-sm-end">
                  <div class="print-option ms-2 mt-4 ms-sm-0 mt-sm-0 text-start text-sm-end">
                    <ul>
                      <li><a data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="printer" href="" data-bs-original-title="" title=""><i class="bi bi-printer-fill"></i></a></li>
                      <li><a data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="pdf" href="" data-bs-original-title="" title=""><i class="fa-solid fa-file-pdf"></i></a></li>
                      <li><a data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="excel" href="" data-bs-original-title="" title=""><i class="fas fa-file-excel" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- table data list -->
        <div class="table-list mt-4">
          <div class="table-list-body table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>
                    <span class="table-title">Project Name
                      <i class="bi bi-caret-up-fill sort-up"></i>
                      <i class="bi bi-caret-down-fill sort-down"></i>
                    </span>
                  </th>
                  <th>
                    <span class="table-title">
                      Start Date
                      <i class="bi bi-caret-up-fill sort-up"></i>
                      <i class="bi bi-caret-down-fill sort-down"></i>
                    </span>
                  </th>
                  <th>
                    <span class="table-title">
                      End Date
                      <i class="bi bi-caret-up-fill sort-up"></i>
                      <i class="bi bi-caret-down-fill sort-down"></i>
                    </span>
                  </th>
                  <th>Status</th>
                  <th>Working Hour</th>
                  <th>Assign To</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody style="border-top: 0">
                <tr>
                  <td style="min-width:30px">1</td>
                  <td style="min-width:150px">Adminty Admin v1</td>
                  <td style="min-width:100px">14/05/2022</td>
                  <td style="min-width:100px">01/01/2015</td>
                  <td style="min-width:160px"><span class="released">Released</span></td>
                  <td style="min-width:140px">5 Hours 20 Minutes</td>
                  <td style="min-width:100px">Coderthemes</td>
                  <td style="min-width:140px">
                    <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete view" data-bs-original-title="" title=""><i class="fa-solid fa-eye"></i></span>
                    <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete edit" data-bs-original-title="" title=""><i class="fas fa-pencil-alt" aria-hidden="true"></i></span>
                    <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete delete-btn" data-bs-original-title="" title=""><i class="far fa-trash-alt" aria-hidden="true"></i></span>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Adminty Admin v1</td>
                  <td>14/05/2022</td>
                  <td>01/01/2015</td>
                  <td><span class="released pending">Pending</span></td>
                  <td>5 Hours 20 Minutes</td>
                  <td>Coderthemes</td>
                  <td>
                    <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete view" data-bs-original-title="" title=""><i class="fa-solid fa-eye"></i></span>
                    <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete edit" data-bs-original-title="" title=""><i class="fas fa-pencil-alt" aria-hidden="true"></i></span>
                    <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete delete-btn" data-bs-original-title="" title=""><i class="far fa-trash-alt" aria-hidden="true"></i></span>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Adminty Admin v1</td>
                  <td>14/05/2022</td>
                  <td>01/01/2015</td>
                  <td>
                    <span class="released in-progress">Work In Progress</span>
                  </td>
                  <td>5 Hours 20 Minutes</td>
                  <td>Coderthemes</td>
                  <td>
                    <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete view" data-bs-original-title="" title=""><i class="fa-solid fa-eye"></i></span>
                    <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete edit" data-bs-original-title="" title=""><i class="fas fa-pencil-alt" aria-hidden="true"></i></span>
                    <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete delete-btn" data-bs-original-title="" title=""><i class="far fa-trash-alt" aria-hidden="true"></i></span>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Adminty Admin v1</td>
                  <td>14/05/2022</td>
                  <td>01/01/2015</td>
                  <td><span class="released comming">Coming soon</span></td>
                  <td>5 Hours 20 Minutes</td>
                  <td>Coderthemes</td>
                  <td>
                    <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete view" data-bs-original-title="" title=""><i class="fa-solid fa-eye"></i></span>
                    <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete edit" data-bs-original-title="" title=""><i class="fas fa-pencil-alt" aria-hidden="true"></i></span>
                    <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete delete-btn" data-bs-original-title="" title=""><i class="far fa-trash-alt" aria-hidden="true"></i></span>
                  </td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Adminty Admin v1</td>
                  <td>14/05/2022</td>
                  <td>01/01/2015</td>
                  <td><span class="released finish">Finished</span></td>
                  <td>5 Hours 20 Minutes</td>
                  <td>Coderthemes</td>
                  <td>
                    <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete view" data-bs-original-title="" title=""><i class="fa-solid fa-eye"></i></span>
                    <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete edit" data-bs-original-title="" title=""><i class="fas fa-pencil-alt" aria-hidden="true"></i></span>
                    <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete delete-btn" data-bs-original-title="" title=""><i class="far fa-trash-alt" aria-hidden="true"></i></span>
                  </td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>Adminty Admin v1</td>
                  <td>14/05/2022</td>
                  <td>01/01/2015</td>
                  <td><span class="released">Released</span></td>
                  <td>5 Hours 20 Minutes</td>
                  <td>Coderthemes</td>
                  <td>
                    <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete view" data-bs-original-title="" title=""><i class="fa-solid fa-eye"></i></span>
                    <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete edit" data-bs-original-title="" title=""><i class="fas fa-pencil-alt" aria-hidden="true"></i></span>
                    <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete delete-btn" data-bs-original-title="" title=""><i class="far fa-trash-alt" aria-hidden="true"></i></span>
                  </td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>Adminty Admin v1</td>
                  <td>14/05/2022</td>
                  <td>01/01/2015</td>
                  <td><span class="released pending">Pending</span></td>
                  <td>5 Hours 20 Minutes</td>
                  <td>Coderthemes</td>
                  <td>
                    <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete view" data-bs-original-title="" title=""><i class="fa-solid fa-eye"></i></span>
                    <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete edit" data-bs-original-title="" title=""><i class="fas fa-pencil-alt" aria-hidden="true"></i></span>
                    <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete delete-btn" data-bs-original-title="" title=""><i class="far fa-trash-alt" aria-hidden="true"></i></span>
                  </td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>Adminty Admin v1</td>
                  <td>14/05/2022</td>
                  <td>01/01/2015</td>
                  <td>
                    <span class="released in-progress">Work In Progress</span>
                  </td>
                  <td>5 Hours 20 Minutes</td>
                  <td>Coderthemes</td>
                  <td>
                    <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete view" data-bs-original-title="" title=""><i class="fa-solid fa-eye"></i></span>
                    <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete edit" data-bs-original-title="" title=""><i class="fas fa-pencil-alt" aria-hidden="true"></i></span>
                    <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete delete-btn" data-bs-original-title="" title=""><i class="far fa-trash-alt" aria-hidden="true"></i></span>
                  </td>
                </tr>
                <tr>
                  <td>9</td>
                  <td>Adminty Admin v1</td>
                  <td>14/05/2022</td>
                  <td>01/01/2015</td>
                  <td><span class="released comming">Coming soon</span></td>
                  <td>5 Hours 20 Minutes</td>
                  <td>Coderthemes</td>
                  <td>
                    <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete view" data-bs-original-title="" title=""><i class="fa-solid fa-eye"></i></span>
                    <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete edit" data-bs-original-title="" title=""><i class="fas fa-pencil-alt" aria-hidden="true"></i></span>
                    <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete delete-btn" data-bs-original-title="" title=""><i class="far fa-trash-alt" aria-hidden="true"></i></span>
                  </td>
                </tr>
                <tr>
                  <td>10</td>
                  <td>Adminty Admin v1</td>
                  <td>14/05/2022</td>
                  <td>01/01/2015</td>
                  <td><span class="released comming">Coming soon</span></td>
                  <td>5 Hours 20 Minutes</td>
                  <td>Coderthemes</td>
                  <td>
                    <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete view" data-bs-original-title="" title=""><i class="fa-solid fa-eye"></i></span>
                    <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete edit" data-bs-original-title="" title=""><i class="fas fa-pencil-alt" aria-hidden="true"></i></span>
                    <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete delete-btn" data-bs-original-title="" title=""><i class="far fa-trash-alt" aria-hidden="true"></i></span>
                  </td>
                </tr>
                <tr>
                  <td>11</td>
                  <td>Adminty Admin v1</td>
                  <td>14/05/2022</td>
                  <td>01/01/2015</td>
                  <td><span class="released comming">Coming soon</span></td>
                  <td>5 Hours 20 Minutes</td>
                  <td>Coderthemes</td>
                  <td>
                    <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete view" data-bs-original-title="" title=""><i class="fa-solid fa-eye"></i></span>
                    <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete edit" data-bs-original-title="" title=""><i class="fas fa-pencil-alt" aria-hidden="true"></i></span>
                    <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete delete-btn" data-bs-original-title="" title=""><i class="far fa-trash-alt" aria-hidden="true"></i></span>
                  </td>
                </tr>
                <tr>
                  <td>12</td>
                  <td>Adminty Admin v1</td>
                  <td>14/05/2022</td>
                  <td>01/01/2015</td>
                  <td><span class="released comming">Coming soon</span></td>
                  <td>5 Hours 20 Minutes</td>
                  <td>Coderthemes</td>
                  <td>
                    <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete view" data-bs-original-title="" title=""><i class="fa-solid fa-eye"></i></span>
                    <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete edit" data-bs-original-title="" title=""><i class="fas fa-pencil-alt" aria-hidden="true"></i></span>
                    <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete delete-btn" data-bs-original-title="" title=""><i class="far fa-trash-alt" aria-hidden="true"></i></span>
                  </td>
                </tr>
                <tr>
                  <td>13</td>
                  <td>Adminty Admin v1</td>
                  <td>14/05/2022</td>
                  <td>01/01/2015</td>
                  <td><span class="released comming">Coming soon</span></td>
                  <td>5 Hours 20 Minutes</td>
                  <td>Coderthemes</td>
                  <td>
                    <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete view" data-bs-original-title="" title=""><i class="fa-solid fa-eye"></i></span>
                    <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete edit" data-bs-original-title="" title=""><i class="fas fa-pencil-alt" aria-hidden="true"></i></span>
                    <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete delete-btn" data-bs-original-title="" title=""><i class="far fa-trash-alt" aria-hidden="true"></i></span>
                  </td>
                </tr>
                <tr>
                  <td>14</td>
                  <td>Adminty Admin v1</td>
                  <td>14/05/2022</td>
                  <td>01/01/2015</td>
                  <td><span class="released comming">Coming soon</span></td>
                  <td>5 Hours 20 Minutes</td>
                  <td>Coderthemes</td>
                  <td>
                    <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete view" data-bs-original-title="" title=""><i class="fa-solid fa-eye"></i></span>
                    <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete edit" data-bs-original-title="" title=""><i class="fas fa-pencil-alt" aria-hidden="true"></i></span>
                    <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete delete-btn" data-bs-original-title="" title=""><i class="far fa-trash-alt" aria-hidden="true"></i></span>
                  </td>
                </tr>
                <tr>
                  <td>15</td>
                  <td>Adminty Admin v1</td>
                  <td>14/05/2022</td>
                  <td>01/01/2015</td>
                  <td><span class="released comming">Coming soon</span></td>
                  <td>5 Hours 20 Minutes</td>
                  <td>Coderthemes</td>
                  <td>
                    <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete view" data-bs-original-title="" title=""><i class="fa-solid fa-eye"></i></span>
                    <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete edit" data-bs-original-title="" title=""><i class="fas fa-pencil-alt" aria-hidden="true"></i></span>
                    <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete delete-btn" data-bs-original-title="" title=""><i class="far fa-trash-alt" aria-hidden="true"></i></span>
                  </td>
                </tr>
                <tr>
                  <td>16</td>
                  <td>Adminty Admin v1</td>
                  <td>14/05/2022</td>
                  <td>01/01/2015</td>
                  <td><span class="released comming">Coming soon</span></td>
                  <td>5 Hours 20 Minutes</td>
                  <td>Coderthemes</td>
                  <td>
                    <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete view" data-bs-original-title="" title=""><i class="fa-solid fa-eye"></i></span>
                    <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete edit" data-bs-original-title="" title=""><i class="fas fa-pencil-alt" aria-hidden="true"></i></span>
                    <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete delete-btn" data-bs-original-title="" title=""><i class="far fa-trash-alt" aria-hidden="true"></i></span>
                  </td>
                </tr>
                <tr>
                  <td>17</td>
                  <td>Adminty Admin v1</td>
                  <td>14/05/2022</td>
                  <td>01/01/2015</td>
                  <td><span class="released comming">Coming soon</span></td>
                  <td>5 Hours 20 Minutes</td>
                  <td>Coderthemes</td>
                  <td>
                    <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete view" data-bs-original-title="" title=""><i class="fa-solid fa-eye"></i></span>
                    <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete edit" data-bs-original-title="" title=""><i class="fas fa-pencil-alt" aria-hidden="true"></i></span>
                    <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete delete-btn" data-bs-original-title="" title=""><i class="far fa-trash-alt" aria-hidden="true"></i></span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- number of data and pagination -->
        <div class="list-footer">
          <div class="row">
            <div class="col-md-5 col-lg-6 align-self-center">
              <div class="showing-number">
                <p> Showing <span class="single-number">1</span> to <span class="single-number">4</span> of <span class="single-number">4</span> entries </p>
              </div>
            </div>
            <div class="col-md-7 col-lg-6">
              <div class="pagination mt-4 mt-md-0 d-flex justify-content-start justify-content-md-end">
                <ul>
                  <li class="arrow"><a href="#"><i class="bi bi-arrow-left"></i></a></li>
                  <li class="mid-pagi"><a href="#"><span>2</span></a><a href="#"><span>3</span></a><a class="active" href="#"><span>4</span></a><a href="#"><span>5</span></a><a href="#"><span>6</span></a><a href="#"><span>7</span></a></li>
                  <li class="arrow"><a href="#"><i class="bi bi-arrow-right"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content part end -->

@endsection 