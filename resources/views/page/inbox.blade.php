@extends('layouts.main')

@extends('layouts.inbox-layout')

@section('inbox')
<!-- ISI -->
@foreach ($posts as $post)

<article class="mb-5" border-bottom pb-5>

<h2><a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h2>

<p>By. <a href="" class="text-decoration-none">{{ $post->user->name }}</a>   <a href="/categories/{{ $post->category->name }}" class="text-decoration-none">{{  $post->category->name  }}</a></p>


<p>{{ $post->excerpt }}</p>

<a href="/posts/{{ $post->slug }}" class="d-block mt-3">Read more..</a>
</article>
@endforeach


@endsection
