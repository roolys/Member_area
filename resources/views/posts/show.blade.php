@extends('layout.app')

@section('content')
<p>{{$post->id}}</p>
<h2>{{$post->description}}</h2>
<h2>{{$post->image}}</h2>

@endsection
