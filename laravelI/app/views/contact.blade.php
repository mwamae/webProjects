@extends('layout');
@section('content');
    <h1>Contact Us</h1>
    <p>For any inquiries please feel free to contact us at your convenience</p>
    {{Form::open()}}
    {{Form::label('subject')}}
    {{Form::text('subject')}}
    {{Form::label('message')}}
    {{Form::textarea('message')}}
    {{Form::submit()}}
    {{Form::close()}}
@stop