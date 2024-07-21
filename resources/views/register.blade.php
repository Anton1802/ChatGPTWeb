<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Register</title>
	@vite('resources/js/register.js')
</head>

<body>
	<main class="main_container">
		<section class="content-wrapper">
			<div class="title-wrapper">
				<h1 class="title">ChatGPT Register</h1>
			</div>
			<div class="register-container">
				<div class="input-wrapper">
					<input class="login-input " id="login-input" name="login" autocapitalize="none" spellcheck="false" required="" placeholder="Login">
					<input class="password-input " id="password-input" type="password" name="password" autocapitalize="none" spellcheck="false" required="" placeholder="Password">
				</div>
			</div>
			<button class="register-btn" disabled="">Register</button>
		</section>
	</main>
</body>

</html>
