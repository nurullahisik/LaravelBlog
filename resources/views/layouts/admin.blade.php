<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="/css/materialize.min.css">

	<!-- Compiled and minified JavaScript -->
	<script src="/js/jquery-2.2.0.min.js"></script>
	<script src="/js/materialize.min.js"></script>
	<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>

	<style>
	header, main, footer {
		padding-left: 240px;
	}

	@media only screen and (max-width : 992px) {
		header, main, footer {
			padding-left: 0;
		}
	}
	</style>
</head>
<body>
	<header>
		<nav class="top-nav teal lighten-2">
			<div class="container">
				<a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only">
					<i class="mdi-navigation-menu"></i>
				</a>
			</div>
		</nav>
		<ul id="nav-mobile" class="side-nav fixed">

			<li class="bold"><a href="/kanepe/pages" class="waves-effect waves-teal">Pages</a></li>
			<li class="bold"><a href="/kanepe/posts" class="waves-effect waves-teal">Posts</a></li>
			<li class="bold"><a href="/kanepe/categories" class="waves-effect waves-teal">Categories</a></li>
			<li class="bold"><a href="/kanepe/logout" class="waves-effect waves-teal">Logout</a></li>
		</ul>
	</header>

	<main>
			<!-- Page Layout here -->

			@yield('content')
	</main>

	<script>
	   $(".button-collapse").sideNav();
	</script>



</body>
</html>
