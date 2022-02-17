@extends('master')

@section('title')
    BITM
@endsection

@section('body')
    <h1>{{$a}}</h1>
    <h1>{{$tapu}}</h1>
    <h1>{{$email}}</h1>

    @foreach($fahim as $key => $value)
        @foreach($value as $item)
            <span>{{$item}}</span>
        @endforeach
        <br/>
    @endforeach
@endsection

