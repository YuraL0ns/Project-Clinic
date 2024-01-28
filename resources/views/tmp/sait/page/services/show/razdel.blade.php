@extends('tmp.main.default')
@section('content')
    @foreach($showAllService as $service)
        <li>
            <a href="{{route('sait.razdel.show.services',
                [
                    'razdel_alias' => $getCatAlias,
                    'alias' => $service->service_alias
                ]
                )}}">
                {{$service->service_title}}</a>
        </li>
    @endforeach
@endsection
