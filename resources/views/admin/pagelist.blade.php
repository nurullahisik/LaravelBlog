@extends('layouts.admin')
@section('content')

<div class="row">
	<div class="col s12">
		<div class="col s4">
			<p><a class="waves-effect waves-light btn" href="/kanepe/pages/create">Ekle</a></p>
		</div>
		<div class="col s8">
			<table class="responsive-table highlight">
				@foreach ($pages as $page)
					<tr>
						<td>
							{{ $page->title }}
						</td>
						<td>
							<a class="waves-effect waves-light btn" href="/kanepe/pages/page/{{ $page->id }}">Edit</a>
						</td>
						<td>
							<a class="waves-effect waves-light btn" href="/kanepe/pages/delete/{{ $page->id }}">Delete</a>
						</td>
				@endforeach
			</table>
		</div>
	</div>
</div>


@endsection
