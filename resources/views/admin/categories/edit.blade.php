@extends('layouts.app')

@section('content')
    @include('admin.includes.errors');
    <div class="panel panel-default">
        <div class="panel panel-heading">
            <h1>Update Category {{$category->name}}</h1>
        </div>
        <div class="panel panel-body">
            <form action="{{route('category.update',['id'=>$category->id])}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" value="{{$category->name}}" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <div class="text-right">
                        <button class="btn btn-success" type="submit">Update Category</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop()