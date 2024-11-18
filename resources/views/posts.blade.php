@extends('layouts.main')
@section('description')
<div>
    this is post page 
    <div>
        @foreach ($posts as $post)
            <div>{{$post -> name}}</div>
        @endforeach
    </div>
</div>    
@endsection