<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>ChatGPT</title>
	@vite('resources/js/welcome.js')
</head>

<body>
	<div class="container_logo">
		<h1>ChatGPT</h1>
		<img src="{{ asset('images/ChatGPT_logo.svg.png') }}" >
		<a href="/login"><button>Login</button></a>
		<a href="/register"><button>Register</button></a>
	</div>
</body>

</html>
