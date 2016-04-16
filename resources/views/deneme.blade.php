

@extends('layouts.admin')

@section('content')
<div class="row">

	<div class="col s12 m4 l3"> <!-- Note that "m4 l3" was added -->
		Grey navigation panel<br />
		<br />
		This content will be:<br />
		3-columns-wide on large screens,<br />
		4-columns-wide on medium screens,<br />
		12-columns-wide on small screens<br />

	</div>

	<div class="col s12 m8 l9"> <!-- Note that "m8 l9" was added -->
		Teal page content<br />
		<br />
		This content will be:<br />
		9-columns-wide on large screens,<br />
		8-columns-wide on medium screens,<br />
		12-columns-wide on small screens <br />

	</div>

</div>
@endsection
