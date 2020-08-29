@extends('admin.layouts.dashboard')
@section('title','Article')
@section('content')

<div class="row">
    <div class="col">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{route('article.create')}}" class="btn btn-md btn-primary rounded-pill shadow-lg"><i class="fas fa-plus"></i> Add Article</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Content</th>
                                <th>User</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Content</th>
                                <th>User</th>
                                <th>Image</th>
                                <th>Action</th>s
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($articles as $key => $article)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$article->title}}</td>
                                <td>{{$article->category->name}}</td>
                                <td>{!! Str::words($article->content, $words = 3, $end = '...') !!}</td>
                                <td>{{$article->users->name}}</td>
                                <td><img src="{{asset($article->image)}}" class="img-fluid" width="100px"></td>
                                <td>
                                    <a href="{{route('article.edit',$article->id)}}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                    <a href="{{route('article.destroy',$article->id)}}" class="btn btn-sm btn-danger btn-hapus"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection