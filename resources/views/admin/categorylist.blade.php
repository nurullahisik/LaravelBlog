@extends('layouts.admin')

@section('content')
<div class="row">
	<br>
		<div class="col s4">
			<form action="/kanepe/categories/save" method="POST">
				{!! csrf_field() !!}
				<input type="text" name="categoryid" hidden value="{{ $categoryid }}" />

				<table class="responsive-table centered">
				<tr>
					<td>
					<div class="input-field col s12">
								<input id="name" name="name" type="text" class="validate" value="{{ $categoryname }}">
								<label for="name">Kategori Adı</label>
					</div>
					</td>
				</tr>
				<tr>
					<td>
						<button class="btn waves-effect waves-light" type="submit" name="action">Kaydet
							<i class="material-icons right">send</i>
						</button>
					</td>
				</tr>
				</table>
			</form>
			<div class="input-field col s12">
				@include('common.errors')
			</div>
		</div>


		<div class="col s8">
			<table class="responsive-table highlight">
			@foreach ($categories as $category)
				<tr>
				<td>
					{{ $category->name }}
				</td>
				<td>
					<a class="waves-effect waves-light btn" href="/kanepe/categories/delete/{{$category->id}}">Delete</a>
				</td>
				<td>
					<a class="waves-effect waves-light btn" href="/kanepe/categories/{{$category->id}}">Edit</a>
				</td>
			</tr>
			@endforeach
		</table>
</div>
@endsection
