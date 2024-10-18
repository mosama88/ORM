@extends('dashboard.layouts.master')
@section('title', 'sizes')
@section('css')
@endsection
@section('page-header', 'Edit Post')
@section('page-header_desc', 'Edit Post')
@section('page-header_link')
    <li class="breadcrumb-item"><a href="{{ route('sizes.index') }}">Size Index</a></li>
@endsection
@section('content')



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
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Create a New Size</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('sizes.update', $info['id']) }}" method="POST" role="form">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" name="name" value="{{ $info['name'] }}" class="form-control"
                                id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">hexa</label>
                            <textarea class="form-control" name="description" rows="3" placeholder="Enter ...">{{ $info['description'] }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">status</label>
                            <textarea class="form-control" name="status" rows="3" placeholder="Enter ...">{{ $info['status'] }}</textarea>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->


        </div>




    @endsection
    @section('scripts')
    @endsection
