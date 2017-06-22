<div class="formular">
	<form id="loginform" action="/Login/Authenticate" method="POST">
    	<label class="formLabel">Username:</label>
		<input class="inputTextbox" type="text" name="username" value="<?= (isset($username)) ? $username : "" ?>"/><br>
        <label class="formLabel">Password:</label>
		<input class="inputTextbox" type="password" name="password" /><br>
		<?= $html->renderCSRF() ?>
        <input type="submit" value="Login" class="formSubmit"/>
        <a class="actionLink" href="/Registration/RequestPasswordReset">Passwort vergessen?</a>
				<br>
				<a class="actionLink" href="/Registration">Kein Account?</a>
	</form>
</div>
