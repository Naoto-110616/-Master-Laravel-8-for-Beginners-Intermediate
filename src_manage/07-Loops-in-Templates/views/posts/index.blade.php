@extends("layouts.app")

@section("title","Blog posts")

@section("content")
@foreach ($posts as $key => $post)
<div>{{ $key }}.{{ $post["title"] }}</div>
@endforeach

@endsection