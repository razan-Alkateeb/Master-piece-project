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
    Edit Forms
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
                            <h3 class="card-title">Edit Time</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->



                        <form action="{{ url('time/' . $data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="card-body">
                                @if (session('flash_message'))
                                    <div
                                        class="alert @if (session('flash_status') === 'deleted') alert-danger @else alert-success @endif">
                                        {{ session('flash_message') }}
                                    </div>
                                @endif
                                <input type="hidden" name="id" value="{{ $data->id }}" id="id">

                                <div class="form-group">
                                    <label for="exampleInputName">Time Name</label>
                                    <input type="text" class="form-control" value="{{ $data->time_name }}" name="name"
                                        id="exampleInputName" placeholder="Enter time name">
                                    <span class="text-danger">
                                        @error('name')
                                            {{ $message }}
                                        @enderror
                                    </span><br>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputNum">Days Number</label>
                                    <input type="number" class="form-control" value="{{ $data->time_duration }}"
                                        name="num" id="exampleInputNum" placeholder="Enter number of days">
                                    <span class="text-danger">
                                        @error('num')
                                            {{ $message }}
                                        @enderror
                                    </span><br>
                                </div>
                            </div>
                            <div class="card-footer">
                                <input type="submit" value="Update" class="btn btn-success"><br>
                            </div>
                        </form>


                        <!-- /.card-body -->



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
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
@endsection
