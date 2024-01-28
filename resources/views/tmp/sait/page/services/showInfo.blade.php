@extends('tmp.main.default')
@section('content')
    <b>{{ $service->service_alias }}</b>

    <h3>{{ $service->service_title }}</h3>

@foreach($service->doctor as $doc)
    <ul>
        <li><a href="{{route('sait.doctor.show', $doc->doctor_alias)}}">{{$doc->last_name}}</a></li>
    </ul>
@endforeach


@endsection
