@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel panel-heading">
            <form action="{{route('post.store')}}" method="post">
                {{csrf_field()}}

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="title">Featured Image</label>
                    <input type="file" name="featured" class="form-control">
                </div>
                <div class="form-group">
                    <label for="title">Content</label>
                    <textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <button class="btn success" type="submit">Store Post</button>
                </div>
            </form>
        </div>
    </div>
@stop()