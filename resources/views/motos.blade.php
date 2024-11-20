<?php $page_title = "MotosGeneralInfo" ?>


@extends('layouts.main')
@section('description')
<div>
this is moto page
    <div>
        @foreach ($motos as $moto)
            <div><br>{{ $moto -> name}}</div>
            <div>{{ $moto -> description}}</div>
            <div>{{ $moto -> motor_volume}}</div>
            <div>{{ $moto -> hp}}</div>
            <div> <img src="<?php echo $moto -> image; ?>"> </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

<!-- <img src=" url " alt=" description "> -->
