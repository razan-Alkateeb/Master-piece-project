@extends('dashbord_views.layout.master')

@section('title')
    Subscriptions
@endsection

@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endsection

@section('title_page1')
    Admin Home
@endsection

@section('title_page2')
    Subscriptions
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="row card-header">
                            <h3 class="col-3">Subscriptions DataTable</h3>
                            <div class="col-2">
                                <a href=" {{ url('/subscription/create') }}"> <button type="button"
                                        class="btn bg-primary ">
                                        Add New Subscription</button></a>
                            </div>

                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            @if (session('flash_message'))
                                <div
                                    class="alert @if (session('flash_status') === 'deleted') alert-danger @else alert-success @endif">
                                    {{ session('flash_message') }}
                                </div>
                            @endif
                            <table id="example1" class="table table-bordered table-striped ">
                                <thead>

                                    <tr>
                                        <th>#</th>
                                        <th>subscription_visits</th>
                                        <th>subscription_price</th>
                                        <th>subscription_type_id</th>
                                        <th>subscription_time_id</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    @php $count =0; @endphp
                                    @foreach ($data as $item)
                                        <tr>
                                            @php $count++; @endphp

                                            <td>{{ $count }}</td>

                                            <td>{{ $item->subscription_visits }}</td>
                                            <td>{{ $item->subscription_price }}</td>


                                            @foreach ($types as $type)
                                                @if ($item->subscription_type_id === $type->id)
                                                    <td>{{ $type->type_name }}</td>
                                                @endif
                                            @endforeach

                                            @foreach ($times as $time)
                                                @if ($item->subscription_time_id === $time->id)
                                                    <td>{{ $time->time_name }}</td>
                                                @endif
                                            @endforeach


                                            <td>
                                                <a href="{{ url('/subscription/' . $item->id . '/edit') }}">
                                                    <button type="button" class="btn btn-success btn-sm">Edit</button></a>

                                                <!-- Delete Admin form (you can use a modal for confirmation) -->
                                                <form method="POST" action="{{ url('/subscription' . '/' . $item->id) }}"
                                                    style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Confirm Delete?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>subscription_visits</th>
                                        <th>subscription_price</th>
                                        <th>subscription_type_id</th>
                                        <th>subscription_time_id</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

@section('scripts')
    <!-- DataTables  & Plugins -->
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../../plugins/jszip/jszip.min.js"></script>
    <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <!-- Page specific script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection
