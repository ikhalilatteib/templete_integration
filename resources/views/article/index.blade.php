@extends('layouts.admin-layouts')
@section('title','| Article Index ')
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
                            <table class="table table-borderless">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Image</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($articles as $article)
                                    <tr>
                                        <td>
                                            {{$loop->iteration}}
                                        </td>
                                        <td>
                                            {{$article->title}}
                                        </td>
                                        <td>
                                            {{$article->users->name}}
                                        </td>
                                        <td>
                                            <img src="{{asset('uploads/post').'/'.$article->image}}" width="80" height="80">
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
    </div>
@endsection