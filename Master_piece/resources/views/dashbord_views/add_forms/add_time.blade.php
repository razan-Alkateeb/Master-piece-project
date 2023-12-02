@extends('dashbord_views.layout.master')

@section('title')
Forms
@endsection

@section('css')

@endsection

@section('title_page1')
Admin Home
@endsection

@section('title_page2')
Add Forms
@endsection

@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
      <div class="row">

        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add New Time</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

            <form action="{{ url('/time') }}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="card-body">

                <div class="form-group">
                    <label for="exampleInputName">Time Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputName" placeholder="Enter time name">
                    <span class="text-danger">
                      @error('name')
                          {{ $message }}
                      @enderror
                    </span><br>
                </div>

                <div class="form-group">
                    <label for="exampleInputNum">Days Number</label>
                    <input type="number" class="form-control" name="num" id="exampleInputNum" placeholder="Enter number of days">
                    <span class="text-danger">
                      @error('num')
                          {{ $message }}
                      @enderror
                    </span><br>
                </div>


              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <input type="submit" value="Save" class="btn btn-success"><br>
              </div>
            </form>

          </div>
          <!-- /.card -->

        </div>
        <!--/.col (left) -->

      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
@endsection

@section('scripts')
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script>
    $(function () {
      bsCustomFileInput.init();
    });
    </script>
@endsection

