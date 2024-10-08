@extends('dashboard.layouts.master')
@section('title', 'comments')
@section('css')
@endsection
@section('page-header', 'Edit Comment')
@section('page-header_desc', 'Edit Comment')
@section('page-header_link')
    <li class="breadcrumb-item"><a href="{{ route('comments.index') }}">Post Index</a></li>
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
                    <h3 class="card-title">Create a New Comment</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('comments.update', $info['id']) }}" method="POST" role="form">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" name="name" value="{{ $info['name'] }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Comments</label>
                            <textarea class="form-control" name="comments" rows="3" placeholder="Enter ...">{{ $info['comments'] }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Description</label>
                            <textarea class="form-control" name="description" rows="3" placeholder="Enter ...">{{ $info['description'] }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Date</label>
                            <input type="date" name="date" value="{{ $info['date'] }}" class="form-control">
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
