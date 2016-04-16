@extends('layouts.admin')

@section('content')

<div class="row">

	<div class="col s12">

		<form action="/kanepe/posts/save" method="POST">
			{!! csrf_field() !!}
			<input type="text" name="id" hidden value="{{ $id }}" />

			<div class="input-field col s12">
				<input id="title" name="title" type="text" class="validate" value="{{ $title }}">
				<label for="title">Başlık</label>
			</div>

			<div class="input-field col s12">
				<input id="permalink" name="permalink" type="text" class="validate" value="{{ $permalink }}">
				<label for="permalink">Permalink</label>
			</div>

			<div class="input-field col s12">
				<label> Kategori</label>
				<br><br>
				@foreach($categories as $category)
				@if($category->id == $selected_category)
					<input class="with-gap" name="kategori" type="radio" id="test{{$category->name}}" checked value="{{$category->id}}"/>
				@else
					<input class="with-gap" name="kategori" type="radio" id="test{{$category->name}}" value="{{$category->id}}"/>
				@endif
					<label for="test{{$category->name}}">{{$category->name}}</label>

				@endforeach
			</div>

			<div class="input-field col s12"><br></div>
			<div class="input-field col s12">
				<textarea id="content" name="content" class="materialize-textarea">{{ $content }}</textarea>
			</div>
			<div class="input-field col s12">
			<button class="btn waves-effect waves-light" type="submit" name="action">Kaydet
				<i class="material-icons right">send</i>
			</button>
			</div>
		</form>
		<div class="input-field col s12">
			@include('common.errors')
		</div>
	</div>
</div>

<script>
	CKEDITOR.replace( 'content' );
</script>

@endsection
