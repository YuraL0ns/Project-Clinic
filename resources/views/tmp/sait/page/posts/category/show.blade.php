@extends('tmp.main.default')
@section('content')

    <div>
        @foreach ($cat->posts as $posts )
            {{$posts->title}}
        @endforeach
    </div>

@endsection