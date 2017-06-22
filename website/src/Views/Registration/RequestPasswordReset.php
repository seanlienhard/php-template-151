<h1>Passwort Vergessen</h1>
<form class="formular" action="/Registration/RequestPasswordResetEmail" method="POST">
	<?= $html->renderCSRF() ?>
	<label class="formLabel">Username:</label>
	<input class="inputTextbox" type="text" name="username"/><br>
	<input class="formSubmit" value="Reset Password!" type="submit" />
</form>
