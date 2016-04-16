@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col s8 offset-s2">
	  <div class="card blue lighten-5">
		<div class="card-content black-text">
			<span class="black-text text-darken-1">Tarih: {{ date_format($postView->updated_at, 'd-m-Y H:i') }}</span><br>
			<span class="disqus-comment-count" data-disqus-url="http://nurullahisik.com/blog/{{$postView->permalink}}"> <!-- Count will be inserted here --> </span>

			<span class="card-title blue-text text-darken-1">{{$postView->title}}</span>
			<p>{!! $postView->content !!}</p>

		</div>
	  </div>
	</div>

<div class="row">
	<div class="col s8 offset-s2">
		@include('common.disqus')
	</div>
</div>

@endsection
