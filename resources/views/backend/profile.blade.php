@extends('layouts.backend')

@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
    </ol>
</div>
<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h3>Update Name</h3>
            </div>
            <div class="card-body">
                @if (session('name_success'))
                    <div class="alert alert-success">{{session('name_success')}}</div>
                @endif
                <form action="{{route('update_name')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Name</label>
                        <input required type="text" class="form-control" name="name" value="{{Auth::user()->name}}">
                        @error('name')
                            <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Update Name</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h3>Update Image</h3>
            </div>
            <div class="card-body">
                @if (session('image_success'))
                <div class="alert alert-success">{{session('image_success')}}</div>
                @endif
                <form action="{{route('update_image')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Image</label>
                        <input required type="file" name="image" class="form-control" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                        @error('image')
                            <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <img id="blah" width="100" src="{{asset('uploads/users')}}/{{Auth::user()->image}}" alt="">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Update Image</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h3>Change Password</h3>
            </div>
            <div class="card-body">
                @if (session('pass_success'))
                <div class="alert alert-success">{{session('pass_success')}}</div>
                @endif
                <form action="{{route('update_password')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Old Password</label>
                        <input type="password" name="old_password" class="form-control">
                        @error('old_password')
                            <strong class="text-danger">{{$message}}</strong>
                        @enderror
                        @if (session('wrong_pass'))
                        <strong class="text-danger">{{session('wrong_pass')}}</strong>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control">
                        @error('password')
                            <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control">
                        @error('password_confirmation')
                            <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Change Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection