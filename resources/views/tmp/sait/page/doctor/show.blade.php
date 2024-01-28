@extends('tmp.main.default')
@section('content')
    {{$doctor->first_name}} {{$doctor->last_name}} {{$doctor->second_name}}
@endsection
