<!DOCTYPE html>
<html>
@include('parts.head')
<body class="hold-transition skin-blue sidebar-mini">
  @include('parts.ga')
<div class="wrapper">

  @include('parts.header')

  @include('parts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    @include('contents.header')

    <!-- Main content -->
    <section class="content">

      @include('contents.boxes')

      @include('contents.dashboard')

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @include('parts.footer')

  @include('parts.control')

</div>
<!-- ./wrapper -->

@include('parts.scripts')

</body>
</html>
