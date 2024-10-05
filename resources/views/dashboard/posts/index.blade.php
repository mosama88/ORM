@extends('dashboard.layouts.master')
@section('title', 'Posts')
@section('css')
@endsection
@section('active-posts-index', 'active')
@section('page-header', 'Posts')
@section('page-header_desc', 'Posts')
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
                        <a type="button" href="{{ route('posts.create') }}" class="btn btn-block btn-primary btn-lg">Create
                            Post</a>
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
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Discription</th>
                                <th>Notes</th>
                                <th>created By</th>
                                <th>Updated By</th>
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
                                        <td>{{ Str::limit($info['title'], 30) }}</td>
                                        <td>{{ Str::limit($info['discription'], 30) }}</td>
                                        <td>{{ Str::limit($info['notes'], 30) }}</td>
                                        <td>{{ $info->createdBy?->name }}</td>
                                        <td>
                                            @if ($info['updated_by'] > 0)
                                                {{ $info->updateddBy?->name }}
                                            @else
                                                Not Found
                                            @endif
                                        </td>

                                        <td>
                                            <a type="button" href="{{ route('posts.edit', $info['id']) }}"
                                                class="btn btn-block btn-info btn-sm">
                                                edit</a>
                                            <form action="{{ route('posts.destroy', $info['id']) }}" method="POST"
                                                onsubmit="return confirm('Are you sure you want to delete this post?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-block btn-danger btn-sm">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
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
@endsection
