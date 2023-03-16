@extends('layouts.backend')

@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0)">Article</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Article</a></li>
    </ol>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3>Add Article</h3>
            </div>
            <div class="card-body">
                @if (session('article_success'))
                    <div class="alert alert-success">{{session('article_success')}}</div>
                @endif
                <form action="{{route('article_add')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <label for="" class="form-label">Category</label>
                            <select name="category_id" class="form-control">
                                <option value="">-- Select Article Category --</option>
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="" class="form-label">Headline</label>
                            <input type="text" class="form-control" name="headline" placeholder="Enter Article Headline">
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label for="" class="form-label">Description</label>
                            <textarea id="summernote" class="form-control" name="description" placeholder="Enter Article Description"></textarea>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label for="" class="form-label">Image</label>
                            <input type="file" class="form-control" name="image" placeholder="Enter Article Image" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                            <img id="blah" width="100" alt="">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer_script')
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
@endsection