

@extends('layouts.admin')

@section('content')
<div class="row">

	<div class="col s12">

		<form action="/kanepe/pages/save" method="POST">
			{!! csrf_field() !!}
			<input type="text" name="id" hidden value="{{ $id }}" />

			<div class="card col s12">
				<input name="title" type="text"  value="{{ $title }}"></input>

			</div>
			<div class="input-field col s12">
				<input id="permalink" name="permalink" type="text" class="validate" value="{{ $permalink }}">
				<label for="permalink">Permalink</label>
			</div>

			<div class="input-field col s12">
				<textarea id="content" name="content" class="materialize-textarea">{{ $content }}</textarea>
				<label for="content">İçerik</label>
			</div>

			<button class="btn waves-effect waves-light" type="submit" name="action">Kaydet
				<i class="material-icons right">send</i>
			</button>
		</form>
		<div class="input-field col s12">
			@include('common.errors')
		</div>
	</div>
</div>
@endsection
