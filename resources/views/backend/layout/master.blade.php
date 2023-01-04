<!DOCTYPE html>
<html lang="en">

<head>
  <!-- css file start -->
    @include('backend.includes.head')
  <!-- css file end -->

  <!-- css file start -->
    @include('backend.includes.css')
  <!-- css file end -->
</head>
<body class="side-menu">

 <section class="dashboard">
    

    <!-- sidebar start -->
      @include('backend.includes.sidebar')
    <!-- sidebar end -->

     <!-- topbar start -->
      @include('backend.includes.topbar')
    <!-- topbar end -->

    {{-- @yield('backend.includes.dashboardContent') --}}
    @yield('content')

  </section>

  <!-- script file start -->
  @include('backend.includes.script')
  <!-- script file  end-->


</body>

</html>