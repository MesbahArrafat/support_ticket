 <div class="toggle-overlay d-block d-lg-none"></div>
 <div class="navigation-body shadow">
      <div class="close-mobile-menu d-block d-lg-none">
        <i class="bi bi-arrow-left"></i>
      </div>
      <div class="logo">
        <a href="{{ route('dashboard') }}">
          <img class="main-logo" src="{{asset('backend/images/logo.png')}}" alt="logo" width="130">
          <img class="mini-logo d-none" src="{{asset('backend/images/mini-logo.png')}}" alt="mini-logo">
        </a>
      </div>
      <div class="navigation">
        <div class="top-heading title">
          <h4>Navigation</h4>
        </div>
        <div class="main-menus">
          <ul id="accordion" class="accordion">
            {{-- <li class="active">
              <div class="link">
                <a href="{{ route('dashboard') }}">
                <span class="icon"><i class="bi bi-house-door"></i></span>
                <span class="title">
                  Dashboard
                  <span class="arrow float-end"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                </span>
                </a>
              </div>
            </li> --}}
            <li class="active">
              <a href="{{ route('dashboard') }}">
                <span class="icon"><i class="bi bi-house-door"></i></span>
                <span class="title">
                  Dashboard
                  <!-- <span class="type">NEW</span> -->
                </span>
              </a>
            </li>
            {{-- <li>
              <a href="{{ route('form') }}">
                <span class="icon"><i class="fa-brands fa-wpforms"></i></span>
                <span class="title">
                  Form Element
                  <!-- <span class="type">NEW</span> -->
                </span>
              </a>
            </li>
            <li>
              <a href="{{ route('listpage') }}">
                <span class="icon"><i class="fa-brands fa-wpforms"></i></span>
                <span class="title">
                  List Page
                  <!-- <span class="type">NEW</span> -->
                </span>
              </a>
            </li>
            <li>
              <a href="{{ route('gallery')}}">
                <span class="icon"><i class="fa-brands fa-wpforms"></i></span>
                <span class="title">
                  Gallery
                  <!-- <span class="type">NEW</span> -->
                </span>
              </a>
            </li>
            <li>
              <a href="{{ route('viewpage')}}">
                <span class="icon"><i class="fa-brands fa-wpforms"></i></span>
                <span class="title">
                  View Page
                </span>
              </a>
            </li> --}}
            <!-- <li>
              <a href="change-password.html">
                <span class="icon"><i class="fa-brands fa-wpforms"></i></span>
                <span class="title">
                  Change password
                </span>
              </a>
            </li> -->

            {{-- User section navbar start --}}
            @if(auth()->user()->role == 1)
            <li>
              <a href="{{ route('adduser') }}">
                <span class="icon"><i class="fa-brands fa-wpforms"></i></span>
                <span class="title">
                  Add User
                  <!-- <span class="type">NEW</span> -->
                </span>
              </a>
            </li>
            <li>
              <a href="{{ route('manageusers') }}">
                <span class="icon"><i class="fa-brands fa-wpforms"></i></span>
                <span class="title">
                  Manage User
                  <!-- <span class="type">NEW</span> -->
                </span>
              </a>
            </li>
            <li>
              <a href="{{ route('users') }}">
                <span class="icon"><i class="fa-brands fa-wpforms"></i></span>
                <span class="title">
                  Users List
                  <!-- <span class="type">NEW</span> -->
                </span>
              </a>
            </li> 
            @endif
             {{-- User section navbar ends --}}

              {{-- User Details section navbar start --}}
              @if(auth()->user()->role == 1)
              <li>
                <a href="{{ route('adduser.details') }}">
                  <span class="icon"><i class="fa-brands fa-wpforms"></i></span>
                  <span class="title">
                    Add User Details
                    <!-- <span class="type">NEW</span> -->
                  </span>
                </a>
              </li>
              <li>
                <a href="{{ route('manageusers.details') }}">
                  <span class="icon"><i class="fa-brands fa-wpforms"></i></span>
                  <span class="title">
                    Manage User Details
                    <!-- <span class="type">NEW</span> -->
                  </span>
                </a>
              </li>
              <li>
                <a href="{{ route('user.details.list') }}">
                  <span class="icon"><i class="fa-brands fa-wpforms"></i></span>
                  <span class="title">
                    User Details List
                    <!-- <span class="type">NEW</span> -->
                  </span>
                </a>
              </li>
              @endif
              {{-- User Details section navbar end --}}

              {{-- project section navbar start --}}
            @if(auth()->user()->role == 1)
            <li>
              <a href="{{ route('addproject') }}">
                <span class="icon"><i class="fa-brands fa-wpforms"></i></span>
                <span class="title">
                  Add Project
                  <!-- <span class="type">NEW</span> -->
                </span>
              </a>
            </li>
            <li>
              <a href="{{ route('manageproject') }}">
                <span class="icon"><i class="fa-brands fa-wpforms"></i></span>
                <span class="title">
                  Manage Project
                  <!-- <span class="type">NEW</span> -->
                </span>
              </a>
            </li>
            <li>
              <a href="{{ route('allproject') }}">
                <span class="icon"><i class="fa-brands fa-wpforms"></i></span>
                <span class="title">
                  Project List
                  <!-- <span class="type">NEW</span> -->
                </span>
              </a>
            </li> 
            @endif
            {{-- project section navbar end --}}

            {{-- support category section navbar start --}}
            @if(auth()->user()->role == 1)
            <li>
              <a href="{{ route('addSupportCategory') }}">
                <span class="icon"><i class="fa-brands fa-wpforms"></i></span>
                <span class="title">
                  Add Support Category
                  <!-- <span class="type">NEW</span> -->
                </span>
              </a>
            </li>
            <li>
              <a href="{{ route('manageSupportCategory') }}">
                <span class="icon"><i class="fa-brands fa-wpforms"></i></span>
                <span class="title">
                  Manage Support Category
                  <!-- <span class="type">NEW</span> -->
                </span>
              </a>
            </li>
            <li>
              <a href="{{ route('allSupportCategory') }}">
                <span class="icon"><i class="fa-brands fa-wpforms"></i></span>
                <span class="title">
                  Support Category List
                  <!-- <span class="type">NEW</span> -->
                </span>
              </a>
            </li> 
            @endif
            {{-- support category  section navbar end --}}


            {{-- support request section navbar start --}}

            @if(auth()->user()->role == 3 || 1)
            @if(auth()->user()->role == 3)
            <li>
              <a href="{{ route('addSupportRequest') }}">
                <span class="icon"><i class="fa-brands fa-wpforms"></i></span>
                <span class="title">
                  Add Support Request
                  <!-- <span class="type">NEW</span> -->
                </span>
              </a>
            </li>
            @endif
            <li>
              {{-- <a href="{{ route('customer_manageSupportRequest') }}"> --}}
                <a href="{{ route('manageSupportRequest') }}">
                <span class="icon"><i class="fa-brands fa-wpforms"></i></span>
                <span class="title">
                  Manage Support Request
                  <!-- <span class="type">NEW</span> -->
                </span>
              </a>
            </li>
            @if(auth()->user()->role != 2)
            <li>
              <a href="{{ route('customerallSupportRequest') }}">
                <span class="icon"><i class="fa-brands fa-wpforms"></i></span>
                <span class="title">
                  Support Request List
                  <!-- <span class="type">NEW</span> -->
                </span>
              </a>
            </li> 
            @endif
            @endif

            {{-- support request  section navbar end



            @if(auth()->user()->role == 2)
            <li>
              <a href="#">
                <span class="icon"><i class="fa-brands fa-wpforms"></i></span>
                <span class="title">
                  Support Request
                  <!-- <span class="type">NEW</span> -->
                </span>
              </a>
            </li> 
            @endif


            @if(auth()->user()->role == 3)
            <li>
              <a href="#">
                <span class="icon"><i class="fa-brands fa-wpforms"></i></span>
                <span class="title">
                  Add Request
                  <!-- <span class="type">NEW</span> -->
                </span>
              </a>
            </li> 
            @endif


             {{-- project section navbar ends --}}
          </ul>
        </div>
      </div>
      <!-- collapsed navigation start -->
      <div class="collapsed-navigation d-none">
        <ul>
          <li>
            <a href="#">
              <i class="bi bi-house-door"></i>
            </a>
            <div class="mini-dropdown-menu">
              <ul>
                <li class="menu-title"><a href="index.html" class="mini-dashboard">Dashboard</a></li>
                <li><a href="#"><i class="fas fa-chevron-right" aria-hidden="true"></i> Photoshop</a></li>
                <li><a href="#"><i class="fas fa-chevron-right" aria-hidden="true"></i> Html</a></li>
                <li><a href="#"><i class="fas fa-chevron-right" aria-hidden="true"></i> css</a></li>

                <li class="mini-child-menu">
                  <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingthree">
                        <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsethree" aria-expanded="false" aria-controls="flush-collapsethree">
                          <i class="far fa-circle level-icon" aria-hidden="true"></i>
                          Level Two Menu
                          <i class="fa fa-chevron-up float-end" aria-hidden="true"></i>
                        </button>
                      </h2>
                      <div id="flush-collapsethree" class="accordion-collapse collapse" aria-labelledby="flush-headingthree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                          <ul class="mini-child-inner-menu">
                            <li><a href="#"><i class="fas fa-chevron-right" aria-hidden="true"></i> Menu One</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right" aria-hidden="true"></i> Menu Two</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right" aria-hidden="true"></i> Menu Three</a></li>


                            <li class="mini-child-menu mini-fourth-level-button">
                              <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="flush-headingfour">
                                    <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                                      <i class="bi bi-circle level-icon"></i>
                                      Level Two Menu
                                      <i class="fa fa-chevron-up float-end" aria-hidden="true"></i>
                                    </button>
                                  </h2>
                                  <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                      <ul class="mini-child-inner-menu fourth-level-inner-child-menu">
                                        <li><a href="#"><i class="fas fa-chevron-right" aria-hidden="true"></i> Menu One</a></li>
                                        <li><a href="inde"><i class="fas fa-chevron-right" aria-hidden="true"></i> Menu Two</a></li>
                                        <li><a href="#"><i class="fas fa-chevron-right" aria-hidden="true"></i> Menu Three</a></li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                            </div></li>


                          </ul>
                        </div>
                      </div>
                    </div>
                </div></li>



              </ul>
            </div>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-layout-sidebar"></i>
            </a>
            <div class="mini-dropdown-menu">
              <ul>
                <li class="menu-title"><a href="index.html" class="mini-dashboard">Page layouts</a></li>
              </ul>
            </div>
          </li>
          <li>
            <a href="#">
              <i class="fas fa-bars" aria-hidden="true"></i>
            </a>
            <div class="mini-dropdown-menu">
              <ul>
                <li class="menu-title"><a href="index.html" class="mini-dashboard">Navigation</a></li>
                <li><a href="#"><i class="fas fa-chevron-right" aria-hidden="true"></i> Photoshop</a></li>
                <li><a href="#"><i class="fas fa-chevron-right" aria-hidden="true"></i> Html</a></li>
                <li><a href="#"><i class="fas fa-chevron-right" aria-hidden="true"></i> css</a></li>
              </ul>
            </div>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-box"></i>
            </a>
            <div class="mini-dropdown-menu">
              <ul>
                <li class="menu-title"><a href="index.html" class="mini-dashboard">Basic Components</a></li>
                <li><a href="#"><i class="fas fa-chevron-right" aria-hidden="true"></i> Photoshop</a></li>
                <li><a href="#"><i class="fas fa-chevron-right" aria-hidden="true"></i> Html</a></li>
                <li><a href="#"><i class="fas fa-chevron-right" aria-hidden="true"></i> css</a></li>
              </ul>
            </div>
          </li>
          <li>
            <a href="#">
              <i class="fas fa-layer-group" aria-hidden="true"></i>
            </a>
            <div class="mini-dropdown-menu">
              <ul>
                <li class="menu-title"><a href="index.html" class="mini-dashboard">Widget</a></li>
                <li><a href="#"><i class="fas fa-chevron-right" aria-hidden="true"></i> Photoshop</a></li>
                <li><a href="#"><i class="fas fa-chevron-right" aria-hidden="true"></i> Html</a></li>
                <li><a href="#"><i class="fas fa-chevron-right" aria-hidden="true"></i> css</a></li>
              </ul>
            </div>
          </li>
          <li>
            <a href="#">
              <i class="fas fa-cog spin" aria-hidden="true"></i>
            </a>
            <div class="mini-dropdown-menu">
              <ul>
                <li class="menu-title"><a href="index.html" class="mini-dashboard">Animations</a></li>
              </ul>
            </div>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-command"></i>
            </a>
            <div class="mini-dropdown-menu">
              <ul>
                <li class="menu-title"><a href="index.html" class="mini-dashboard">Icons</a></li>
              </ul>
            </div>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-clipboard-check-fill"></i>
            </a>
            <div class="mini-dropdown-menu">
              <ul>
                <li class="menu-title"><a href="index.html" class="mini-dashboard">Form Components</a></li>
                <li><a href="#"><i class="fas fa-chevron-right" aria-hidden="true"></i> Photoshop</a></li>
                <li><a href="#"><i class="fas fa-chevron-right" aria-hidden="true"></i> Html</a></li>
                <li><a href="#"><i class="fas fa-chevron-right" aria-hidden="true"></i> css</a></li>
              </ul>
            </div>
          </li>
          <li>
            <a href="#">
              <i class="fas fa-pen-alt" aria-hidden="true"></i>
            </a>
            <div class="mini-dropdown-menu">
              <ul>
                <li class="menu-title"><a href="index.html" class="mini-dashboard">Form Picker</a></li>
                <li><a href="#"><i class="fas fa-chevron-right" aria-hidden="true"></i> Photoshop</a></li>
                <li><a href="#"><i class="fas fa-chevron-right" aria-hidden="true"></i> Html</a></li>
                <li><a href="#"><i class="fas fa-chevron-right" aria-hidden="true"></i> css</a></li>
              </ul>
            </div>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-shield-check"></i>
            </a>
            <div class="mini-dropdown-menu">
              <ul>
                <li class="menu-title"><a href="index.html" class="mini-dashboard">Form Masking</a></li>
                <li><a href="#"><i class="fas fa-chevron-right" aria-hidden="true"></i> Photoshop</a></li>
                <li><a href="#"><i class="fas fa-chevron-right" aria-hidden="true"></i> Html</a></li>
                <li><a href="#"><i class="fas fa-chevron-right" aria-hidden="true"></i> css</a></li>
              </ul>
            </div>
          </li>
          <li>
            <a href="#">
              <i class="fas fa-quidditch" aria-hidden="true"></i>
            </a>

          </li>
          <li>
            <a href="#">
              <i class="bi bi-file-spreadsheet"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-bar-chart-steps"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-people"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fas fa-cut" aria-hidden="true"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-cloud-upload"></i>
            </a>
          </li>
        </ul>
      </div>

      <!-- collapsed navigation end-->
      <div class="branding text-center">
        <h6 class="full-brand">
          Developed By-
          <a href="https://www.nogorsolutions.com/" target="_blank" class="d-block">Nogor Solutions Limited</a>
        </h6>
        <div class="short-brand d-none">
          <img src="{{asset('backend/images/nogo-fevicon.png')}}" alt="nogo-fevicon">
        </div>
      </div>
    </div>