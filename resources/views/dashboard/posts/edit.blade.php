@extends('dashboard.layouts.master')
@section('title', 'Posts')
@section('css')
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
                    <h3 class="card-title">Create a New Post</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('posts.update', $info['id']) }}" method="POST" role="form">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" name="title" value="{{ $info['title'] }}" class="form-control"
                                id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Description</label>
                            <textarea class="form-control" name="discription" rows="3" placeholder="Enter ...">{{ $info['discription'] }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Notes</label>
                            <textarea class="form-control" name="notes" rows="3" placeholder="Enter ...">{{ $info['notes'] }}</textarea>
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
