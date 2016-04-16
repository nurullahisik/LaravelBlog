@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col s9 offset-s2">

		<div class="row">
			@if($pageView->permalink == "about")
			<div class="col s3">
				<div class="card-panel">
					<img src="/img/nurullahisik.jpg" width="150" height="250" ></img>
				</div>
			</div>
			<div class="col s8">
			@else
			<div class="col s12">
			@endif
				<div class="card blue lighten-5">
					<div class="card-content black-text">
						@if(isset($pageView))
						<span class="card-title blue-text text-darken-1">{{$pageView->title}}</span>
						<p>{{$pageView->content}}</p>
						@endif
					</div>
				</div>
			</div>
		</div>

	</div>
</div>

	@endsection
