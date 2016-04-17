    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        @yield('page-title', 'Översikt')
        <small>
          @yield('parent-title', 'Start')
        </small>
      </h1>
      @include('contents.breadcrumbs')
    </section>
