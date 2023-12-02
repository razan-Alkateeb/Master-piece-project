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
              <h3 class="card-title">Add New Admin</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

            <form action="{{ url('/admin') }}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="card-body">

                <div class="form-group">
                    <label for="exampleInputName">Admin Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputName" placeholder="Enter your name">
                    <span class="text-danger">
                      @error('name')
                          {{ $message }}
                      @enderror
                    </span><br>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter email">
                  <span class="text-danger">
                    @error('email')
                        {{ $message }}
                    @enderror
                  </span><br>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                  <span class="text-danger">
                    @error('password')
                        {{ $message }}
                    @enderror
                  </span><br>
                </div>

                <div class="form-group">
                  <label for="image">Upload Image:</label>
                  <input type="file" accept="image/*" class="form-control" name="image" id="image" placeholder="upload image">
                  <span class="text-danger">
                    @error('image')
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

