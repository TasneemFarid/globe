@extends('layouts.backend')

@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0)">Article</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Article List</a></li>
    </ol>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3>Article List</h3>
            </div>
            <div class="card-body">
                    <table class="table table-striped">
                        @if (session('article_delete'))
                            <div class="alert alert-success">{{session('article_delete')}}</div>
                        @endif
                        <tr>
                            <th>SL</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Headline</th>
                            <th>Description</th>
                            <th>Created At</th>
                            <th>Added By</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($articles as $key=>$article)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td><img src="{{asset('uploads/articles/'.$article->image)}}" width="100" alt=""></td>
                            <td>{{$article->rel_to_category->category_name}}</td>
                            <td>{{$article->headline}}</td>
                            <td>{{substr($article->description, 0, 50)}}... <a href="#" class="text-primary">Read More</a></td>
                            <td>{{$article->created_at->diffForHumans()}}</td>
                            <td>{{$article->rel_to_user->name}}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{route('article_edit_view', $article->id)}}" class="btn btn-primary shadow btn-xs sharp"><i class="fa fa-pencil"></i></a>
                                    <a href="{{route('article_delete', $article->id)}}" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </table>
            </div>
        </div>
    </div>
</div>
@endsection
