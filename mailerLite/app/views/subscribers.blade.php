@extends('layout')

@section('content')
    <p>Subscribers </p>
    @foreach($subscribers as $item)
        <p>Name: {{ $item->name }}   Email: {{ $item->email }}</p>
        
        <p></p>
    @endforeach
    
    <p></p>
    <p >add new {{ HTML::link('/subscribersCreate') }} </p>
    
@stop