<div class="overlay-container" id="login-overlay">
	<div class="overlay">
		<h1 id="login-h1">Einloggen:</h1>
		<form id="login-form" onsubmit="authenticate(event);">
			<label for="username" class="login" id="username">Benutzername:</label>
			<br>
			<input type="text" class="login" id="username" placeholder="root">
			<br>
			<label for="password" class="login" id="password">Kennwort</label>
			<br>
			<input type="password" class="login" id="password" placeholder="********">
			<br>
			<button type="submit" class="login" id="login-button">Einloggen</button>
		</form>
	</div>
</div>
<script src="controller/authentication.js"></script>