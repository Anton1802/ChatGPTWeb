<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Login</title>
	@vite('resources/js/login.js')
</head>

<body>
	<main class="main_container">
		<section class="content-wrapper">
			<div class="title-wrapper">
				<h1 class="title">ChatGPT Login</h1>
			</div>
			<div class="login-container">
				<div class="input-wrapper">
					<input class="login-input " id="login-input" name="login" autocapitalize="none" spellcheck="false" required="" placeholder="Login*">
					<input class="password-input " id="password-input" type="password" name="password" autocapitalize="none" spellcheck="false" required="" placeholder="Password*">
				</div>
			</div>
			<button class="login-btn" disabled="">Login</button>
		</section>
	</main>
</body>

</html>
