@extends('layouts.admin')

@section('content')
<div class="row">
	<div class="col s12">
		<div class="col s6">
			<p><a class="waves-effect waves-light btn" href="/kanepe/posts/create">Yeni Yazı Ekle</a></p>
		</div>
		<div class="col s6">
			<table class="responsive-table highlight">
			@foreach ($posts as $post)
				<tr>
					<td>
						{{ $post->title }}
					</td>
					<td>
						<a class="waves-effect waves-light btn" href="/kanepe/posts/post/{{$post->id}}">Edit</a>
					</td>
					<td>
						<a class="waves-effect waves-light btn" href="/kanepe/posts/delete/{{$post->id}}">Delete</a>
					</td>
				</tr>
			@endforeach
			</table>
		</div>
	</div>
</div>
@endsection
