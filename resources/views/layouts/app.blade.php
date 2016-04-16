<!DOCTYPE html>
<html>
<head>
	<script src="/js/jquery-2.2.0.min.js"></script>
	<link href="/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<meta http-equiv="Content-Language" content="en" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="/js/materialize.min.js"></script>
	<script id="dsq-count-scr" src="//EXAMPLE.disqus.com/count.js" async></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<style>

		.height-small { height: 100px; }
		.height-medium { height: 300px; }
		.height-large { height: 450px; }

			.intro {
				line-height: 150%;
				font-size: 28px;
			}

			.projects {
				font-size: 20px;
			}

			.footer {
				margin-top: 100px;
			}

		.full-width {
			max-width: 100%;
		}

		.text-color-grey {
			color : teal;
		}
		.background{
			color:black;
		}

		.parallax-background {
			background-image: url('/img/header.jpg');
			background-size: cover;
			background-position: center bottom;
		}

		</style>
</head>

	<header>
		<div class="height-medium parallax-background">
			<div class="row">
				<div class="col s2 " style="padding:5px">
					<a href="/" style="color:black"><div class="icon-preview col s m8">
						<i class="material-icons dp48" style="font-weight:900">dashboard</i>
					</div></a>
				</div>
				<div class="col s2" style="padding:5px">
					<a class='dropdown-button btn-flat' href='#' data-activates='dropdown1' style="font-weight:900">
						Categories</a>
					<ul id='dropdown1' class='dropdown-content'>
						@if(isset($categories))
						@foreach($categories as $category)
							<li><a href="/blog/category/{{$category->name}}">{{$category->name}}</a></li>
						@endforeach
						@endif
					</ul>
				</div>
				<div class="col s8 right-align" style="padding:10px">
					@if(isset($pages))
						@foreach($pages as $page)
							<a style="font-weight:900" class="btn-flat waves-effect waves-teal" href="/{{$page->permalink}}">{{$page->title}}</a>
						@endforeach
					@endif
				</div>
			</div>
			<div class="row"></div>
			<div class="row"></div>
			<div class="row"></div>
			<div class="row">
				<div class="col s12 center-align">
					<span style=" font-weight:900;color:green" ><h5><i>Sadece bir yazılımcı...</i></h5></span>
				</div>
			</div>
		</div>
	</header>

	<main>

		@yield('content')

	</main>

	<footer class="footer row">
		<div class="s12 center-align col text-center gray">
			Copyright © 2016 Nurullah IŞIK All rigths reserved.
		</div>
	</footer>

</body>
</html>
