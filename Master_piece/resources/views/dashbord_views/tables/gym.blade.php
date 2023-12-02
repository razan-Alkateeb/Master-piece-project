@extends('dashbord_views.layout.master')

@section('title')
    Gym
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
    Gym
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="row card-header">
                            <h3 class="col-2">Gym DataTable</h3>
                            <div class="col-2">
                                <a href=" {{ url('/gym/create') }}"> <button type="button" class="btn bg-primary ">
                                        Add New Gym</button> </a>
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
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Work Hour</th>
                                        <th>Address</th>
                                        {{-- <th>Phone</th>
                                        <th>facebook</th>
                                        <th>instagram</th>
                                        <th>email</th> --}}
                                        <th>Owner Name</th>
                                        <th>type</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @php $count =0; @endphp
                                    @foreach ($data as $item)
                                        <tr>
                                            @php $count++; @endphp

                                            <td>{{ $count }}</td>
                                            <td>{{ $item->gym_name }}</td>
                                            <td>{{ $item->gym_description }}</td>
                                            <td>{{ $item->gym_workingHoursFrom }}
                                                To {{ $item->gym_workingHoursTo }}</td>
                                            <td>{{ $item->gym_address }}</td>
                                            {{-- <td>{{ $item->gym_phone }}</td>
                                            <td>{{ $item->gym_facebook }}</td>
                                            <td>{{ $item->gym_instagram }}</td>
                                            <td>{{ $item->gym_email }}</td> --}}

                                            @foreach ($owners as $user)
                                                @if ($item->gym_owner_id === $user->id)
                                                    <td>{{ $user->name }}</td>
                                                @endif
                                            @endforeach

                                            @foreach ($types as $type)
                                                @if ($item->gym_type_id === $type->id)
                                                    <td>{{ $type->type_name }}</td>
                                                @endif
                                            @endforeach



                                            <td>
                                                @if ($item->gym_image)
                                                    <img src="{{ $item->gym_image }}" alt="Image" width="80"
                                                        height="80" style="border-radius: 10%">
                                                @else
                                                    No Image
                                                @endif
                                            </td>
                                            <td>
                                                <form method="POST" action="{{ url('/gym' . '/' . $item->id) }}"
                                                    style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Confirm delete?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>

                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Work Hour</th>
                                        <th>Address</th>
                                        {{-- <th>Phone</th>
                                        <th>facebook</th>
                                        <th>instagram</th>
                                        <th>email</th> --}}
                                        <th>Owner Name</th>
                                        <th>type</th>
                                        <th>Image</th>
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
