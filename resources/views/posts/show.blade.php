@extends('layouts.app')
@section('title', 'title')

@section('content')
    <h1>{{ $posts['title'] }}</h1>
    <p>{{ $posts['content'] }}</p>
@endsection