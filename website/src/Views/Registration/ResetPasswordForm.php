<h1>Passwort Zurücksetzen</h1>
<form class="formular" action="/Registration/ResetPassword" method="POST">
	<?= $html->renderCSRF() ?>
	<label class="formLabel">Passwort:</label>
	<input class="inputTextbox" type="password" name="password"/><br>
	<label class="formLabel">Passwort bestatigen:</label>
	<input class="inputTextbox" type="password" name="passwordConfirm"/><br>
	<input type="hidden" name="userId" value="<?= $userId?>"/>
	<input type="hidden" name="confirmation" value="<?= $confirmation?>"/>
	<input value="Bestätigen" type="submit" />
</form>
