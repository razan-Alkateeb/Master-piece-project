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
                            <h3 class="card-title">Edit Subscription</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->



                        <form action="{{ url('subscription/' . $data->id) }}" method="POST" enctype="multipart/form-data">
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
                                    <label for="visits">Number of visits :</label>
                                    <input type="number" class="form-control" value="{{ $data->subscription_visits }}"
                                     name="visits" id="visits" placeholder="Enter number of visits">
                                    <span class="text-danger">
                                        @error('visits')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>

                                <div class="form-group">
                                    <label for="price">Price :</label>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-dollar-sign"></i>
                                            </span>
                                        </div>
                                        <input type="number" class="form-control" value="{{ $data->subscription_price }}"
                                         name="price" id="price" placeholder="Enter price">
                                        <span class="text-danger">
                                            @error('price')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                </div>



                                <div class="form-group">
                                    <label>Select Type :</label>
                                    <select class="form-control" name="type">
                                        @foreach ($types as $type)
                                            <option value="{{ $type->id }}" @if($type->id == $data->subscription_type_id) selected @endif>
                                                {{ $type->type_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">
                                        @error('type')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>



                                <div class="form-group">
                                    <label>Select Time :</label>
                                    <select class="form-control" name="time">
                                        @foreach ($times as $time)
                                            <option value="{{ $time->id }}" @if($time->id == $data->subscription_time_id) selected @endif>
                                                {{ $time->time_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">
                                        @error('time')
                                            {{ $message }}
                                        @enderror
                                    </span>
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
