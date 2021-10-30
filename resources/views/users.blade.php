@extends('layouts.admin-layouts')
@section('title')
    | Utilisateurs
@endsection
@section('main')
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-t-30">
                <div class="col-md-12">
                    <!-- DATA TABLE-->
                    <div class="table-responsive m-b-40">
                        <table class="table table-borderless table-data3">
                            <thead>
                            <tr>
                                <th>Photo</th>
                                <th>date</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($photos as $photo)
                            <tr>
                                <td><img src="{{asset('/uploads/profile').'/'.$photo->avatar}}" width="60" height="60"></td>
                                <td>{{$photo->created_at}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- END DATA TABLE-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection