@extends('tmp.main.default')
@section('content')
    
@foreach ($categories as $category )
    <a href="{{route()}}">{{$category->cat_title}}</a>
@endforeach

@endsection