
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Laravel Learning</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<ul>
		<li><a href="{{ route('home') }}">Home</a></li>
		<li><a href="{{ route('posts') }}">Posts</a></li>
	</ul>
	<div>
		@yield('content')
	</div>
</body>
</html>