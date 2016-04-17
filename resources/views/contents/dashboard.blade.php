      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">

          @include('contents.now')

          @include('contents.todo')

          @include('contents.chat')


        </section>
        <!-- /.Left col -->


        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">

          @include('contents.wheel')

          @include('contents.qindex')

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->
