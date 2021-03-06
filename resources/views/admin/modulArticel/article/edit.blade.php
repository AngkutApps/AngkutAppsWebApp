@extends('admin.layouts.dashboard')
@section('title','Edit Article')
@section('content')
<form method="POST" action="{{route('article.update',$article->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-lg-8 col-md-6 col-sm-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <a href="{{route('article.index')}}" class="btn btn-md btn-success rounded-pill shadow-lg"><i class="fas fa-arrow-left"></i> Back</a>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>title</label>
                        <input type="text" name="title" class="form-control form-control-user rounded-pill @error('title') is-invalid @enderror" value="{{$article->title}}">
                        @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Content</label>
                        <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="contentid">{{$article->content}}</textarea>
                        @error('content')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <button type="reset" class="btn btn-danger float-right mr-1">Reset</button>

                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    Publish
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <button class="btn btn-sm btn-info" name="draft" value="draft">Save Draft</button>
                        <button type="submit" class="btn btn-sm btn-primary">Update</button>
                    </div>

                </div>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    Kategori
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Kategori</label>
                        <select class="form-control @error('category') is-invalid @enderror" name="id_category">
                            <option value="" holder>-Pilih Kategori-</option>
                            @foreach($categories as $category)
                            <option value="{{$category->id}}" @if($category->id == $article->category->id) selected @endif>{{$category->name}}</option>
                            @endforeach
                        </select>
                        @error('category')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    Image
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <img src="{{asset($article->image)}}" alt="" class="img-fluid" width="300px">
                        <input type="file" class="form-control mt-2 @error('image') is-invalid @enderror" name="image">
                        @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('contentid');
</script>
@endsection