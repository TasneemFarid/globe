@extends('layouts.backend')

@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Category</a></li>
    </ol>
</div>

<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h3>Category List</h3>
            </div>
            <div class="card-body">
                    <table class="table table-striped">
                        @if (session('category_delete'))
                            <div class="alert alert-success">{{session('category_delete')}}</div>
                        @endif
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($categories as $key=>$category)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$category->category_name}}</td>
                            <td>{{$category->created_at->diffForHumans()}}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{route('category_delete', $category->id)}}" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </table>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h3>Add Category</h3>
            </div>
            <div class="card-body">
                @if (session('category_success'))
                    <div class="alert alert-success">{{session('category_success')}}</div>
                @endif
                <form action="{{route('category_add')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Cateogry Name</label>
                        <input required type="text" class="form-control" name="category_name" placeholder="Enter Category Name">
                        @error('category_name')
                            <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection