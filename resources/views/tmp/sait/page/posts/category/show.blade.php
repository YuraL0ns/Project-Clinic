@extends('tmp.main.default')
@section('content')

@foreach ($categories as $c )
    <ul>
        @foreach ($c->posts as $post )
            <li>
                <a href="{{route('sait.category.list.show.news.show', [$c->cat_alias,$post->post_alias])}}">{{$post->title}}</a>
            </li>
        @endforeach
    </ul>
@endforeach

@endsection