@extends('layout')

@section('content')
        <form method="post" action="/subscribers" enctype="multipart/form-data">
            <p>Name:          {{ Form::input('text', 'name') }}</p>
            <p>Last Name:          {{ Form::input('text', 'name_last') }}</p>
            
            <p>Company:          {{ Form::input('text', 'company') }}</p>
            
            <p>Email Address: {{ Form::input('email', 'emailAddress') }}</p>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
@stop