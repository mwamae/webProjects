@extends('layout');
@section('content');
    <h1>Cytonn Investments</h1>
    <p>We offer the Best services to our clients</p>
    <ul>
        @foreach($services as $service)
            <li>
                <p>{{ $service->title }}</p>
                <p>{{ $service->description }}</p>
            </li>
            @endforeach
    </ul>
 @stop