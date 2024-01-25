@extends('tmp.main.default')
@section('content')
    
@foreach ($post as $i )
    {{$i->title}}
@endforeach

@endsection