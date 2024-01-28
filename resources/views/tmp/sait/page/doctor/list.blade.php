@extends('tmp.main.default')
@section('content')
    @foreach($doctors as $doctor)
        <ul>
            <li>
                <a href="{{route('sait.doctor.show', $doctor->doctor_alias)}}">{{$doctor->first_name}} {{$doctor->second_name}}</a>
            </li>
        </ul>
    @endforeach
@endsection
