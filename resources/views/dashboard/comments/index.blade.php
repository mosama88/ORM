@extends('dashboard.layouts.master')
@section('title', 'comments')
@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
@endsection
@section('active-comments-index', 'active')
@section('page-header', 'comments')
@section('page-header_desc', 'comments')
@section('page-header_link')
    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
@endsection

@section('content')

    {{-- ./row --}}
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <a type="button" href="{{ route('comments.create') }}"
                            class="btn btn-block btn-primary btn-lg">Create
                            Comment</a>
                    </h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                            </div>

                        </div>
                    </div>
                </div>

                @if (session('success') != null)
                    <div class="alert alert-success text-center">
                        {{ session('success') }}
                    </div>
                @endif




                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger text-center">
                            {{ $error }}
                        </div>
                    @endforeach
                @endif

                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table id="example2" class="table table-bordered table-hover">

                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Discription</th>
                                <th>Comments</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (@!empty($data) && @isset($data))
                                @php
                                    $i = 0;
                                @endphp

                                @foreach ($data as $info)
                                    @php
                                        $i++;
                                    @endphp
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ Str::limit($info['name'], 30) }}</td>
                                        <td>{{ Str::limit($info['description'], 30) }}</td>
                                        <td>{{ Str::limit($info['comments'], 30) }}</td>


                                        <td>
                                            <a type="button" href="{{ route('comments.edit', $info['id']) }}"
                                                class="btn btn-small btn-info btn-sm">
                                                <i class="fas fa-edit"></i></a>
                                            <form action="{{ route('comments.destroy', $info['id']) }}" method="POST"
                                                onsubmit="return confirm('Are you sure you want to delete this post?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-small btn-danger btn-sm">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                {{-- {{ $data->render("pagination::bootstrap-5") }} --}}
                            @else
                                لا توجد بيانات
                            @endif
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.row -->



@endsection
@section('scripts')
    <!-- DataTables -->
    <script src="{{ asset('assets') }}/plugins/datatables/jquery.dataTables.js"></script>
    <script src="{{ asset('assets') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
    <script>
        $(function() {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
            });
        });
    </script>
@endsection
