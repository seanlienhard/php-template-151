<div class="formular">
	<form id="loginform" action="/Login/Authenticate" method="POST">
    	<label>Username:</label>
		<input type="text" name="username" value="<?= (isset($username)) ? $username : "" ?>"/><br>
        <label>Passoword:</label>
		<input type="password" name="password" /><br>	
		<?= $html->renderCSRF() ?>
        <input type="submit" value="Login" class="formSubmit"/>
        <a href="/Registration/RequestPasswordReset">Passwort vergessen?</a>	
		<a href="/Registration">Kein Account?</a>	
	</form>
</div>