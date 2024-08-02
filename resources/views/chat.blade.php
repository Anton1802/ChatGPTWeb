<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>ChatGPT</title>
	@vite('resources/js/chat.js')
</head>

<body>
	<div class="sidenav">
		<h1>ChatGPT</h1>
		<a href="#">Chat #1</a>
		<a class="btn-add" href="#">CHAT ADD</a>
	</div>

<div class="box">
	<div class="message bot" style="transform: translate(0px, 0px); opacity: 1;">
		<strong>
			ChatGPT (6:34:20 PM):
		</strong> 
		<a>Hello! I am ChatGPT. I can help you answer on all your questions!</a>
	</div>
</div>

<div class="input-container">
                <textarea id="input" placeholder="Message..." rows="1"></textarea>
                <div class="input-controls">
                    <button id="send">SEND</button>
                </div>
</div>

</body>

</html>
