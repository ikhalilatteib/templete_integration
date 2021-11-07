@extends('layouts.admin-layouts')
@section('title','| Create Article')
@section('main')
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                                Create Article
                            </h4>
                        </div>
                        <div class="card-body">
                            @if($errors->any())
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li class="text-danger">{{$error}}</li>
                                    @endforeach
                                </ul>
                            @endif
                            <form action="{{route('article.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <label> Title</label>
                                <input type="text" class="form-control" name="title">
                                <label> Post</label>
                                <textarea class="form-control" name="post"></textarea>
                                <label>Article Image</label>
                                <input type="file" name="image" class="form-control" accept="image/*">
                                <button class="btn btn-primary mt-5">Submit</button>
                            </form>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
@endsection