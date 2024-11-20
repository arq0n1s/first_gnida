<?php $page_title = "PostsGeneralInfo" ?>

@extends('layouts.main')
@section('description')
<?php $page_title="PostsGeneralInfo" ?>
<div>
    this is post page 
    <div>
        @foreach ($posts as $post)
            <div>{{$post -> name}}</div>
        @endforeach
    </div>
</div>    
@endsection