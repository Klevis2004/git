@extends('layouts.app')
@section('title', 'Index')

@section('content')
{{ $posts }}
{{-- @foreach ($posts as $key => $post)
@include('posts.partials.post')
@endforeach --}}

<div>
@for ($i = 0; $i <= 10; $i++)
    <div>The current value is {{ $i }}</div>
@endfor
</div>
@endsection