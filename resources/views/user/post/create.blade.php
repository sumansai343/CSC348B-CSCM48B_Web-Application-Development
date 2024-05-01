@extends('layouts.masteruser')
@section('title', 'Add Post')

@section('content')
    <div class="container-fluid px-4">
        <div class="card mt-4">
            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif
            <div class="card-header text-white" style="background-color: cadetblue">
                <h4>Create Blog Post

                </h4>
            </div>
            <div class="card-body">
                <form action="{{ url('user/add-post') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 d-none">
                        <label>Category</label>
                        <select name="category_id" class="form-control">
                            @foreach ($category as $cateitem)
                                <option value="{{ $cateitem->id }}">{{ $cateitem->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="row">
                        <div class="mb-3 col">
                            <label>Blog Title</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="mb-3 col">
                            <label>Blog Slug</label>
                            <input type="text" name="slug" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label>Blog Description</label>
                        <textarea rows="5" name="description" id="mySummernote" class="form-control"></textarea>
                    </div>
                    <div class="mb-3 d-none">
                        <label>Youtube Iframe Link</label>
                        <textarea type="file" name="yt_iframe" class="form-control" rows="4"></textarea>
                    </div>
                    <div class="mb-3 ">
                        <label>Meta Title</label>
                        <input type="text" name="meta_title" class="form-control">
                    </div>
                    <div class="mb-3 d-none">
                        <label>Meta Description</label>
                        <textarea rows="3" name="meta_description" class="form-control"></textarea>
                    </div>
                    <div class="mb-3 d-none">
                        <label>Meta Keyword</label>
                        <textarea rows="3" name="meta_keyword" class="form-control"></textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3  d-none">
                            <label>Status</label>
                            <input type="checkbox" name="navbar_status">
                        </div>

                        <div class="col-md-8">
                            <div class="mb-3">
                                <button type="submit" class="btn bg-white border rounded-sm  text-black">Create Blog
                                    Post</button>
                            </div>
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>

@endsection
