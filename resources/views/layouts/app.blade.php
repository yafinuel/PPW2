<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="top-bar">
		<h2><a href="#">Logo</a></h2>
	</div>
    <div class="container">
		<div class="header">
			<h1 class="judul">@yield('judul')</h1>
			<ul>
				<li><a href=" {{route('home')}} ">Home</a></li>
				<li><a href=" {{route('about')}} ">About</a></li>
			</ul>
		</div>
        @yield('content')
    </div>
</body>
</html>