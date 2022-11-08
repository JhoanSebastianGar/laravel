@extends('template')
@section('content')
<h1>BLOG</h1>
    <ul>    
        @foreach($posts as $post)
            <li><strong>{{$post->id}}</strong>
            <a href="{{route ('post',$post->slug)}}">
                {{$post->title}}
            </a>
        </li>
        <span>{{$post->user->name}}</span>
        @endforeach
        {{$posts->links()}}
</ul>
@endsection

