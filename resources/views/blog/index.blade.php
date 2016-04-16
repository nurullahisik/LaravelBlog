
@extends('layouts.app')
@section('content')




@foreach($posts as $post)
  <div class="row">
	<div class="col s8 offset-s2">
	  <div class="card blue lighten-5">
		<div class="card-content black-text">

			<span class="black-text text-darken-1">Tarih: {{ date_format($post->updated_at, 'd-m-Y H:i') }}</span><br>
			<span class="disqus-comment-count" data-disqus-url="http://nurullahisik.com/blog/{{$post->permalink}}"> <!-- Count will be inserted here --> </span>

			<span class="card-title blue-text text-darken-1"><a href="/blog/{{$post->permalink}}">{{ $post->title }}</a></span>
			<p>{!! substr($post->content,0,500) !!}...</p>
		</div>
		<div class="card-action">
		  <a href="/blog/{{$post->permalink}}" class="blue-text">Devamı</a>
		</div>
	  </div>
	</div>


  </div>
@endforeach


@include('common.pagination')

@endsection
