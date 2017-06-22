<h1>Registration</h1>
<div class="formular">
	<form action="/Registration/Register" method="POST">
		<?= $html->renderCSRF() ?>
		<label class="formLabel">Email:</label>
		<input class="inputTextbox" id="email" type="text" name="email" value="<?= (isset($email)) ? $email : "" ?>"/>
		<label class="formLabel">Username:</label>
		<input class="inputTextbox" id="username" type="text" name="username" value="<?= (isset($username)) ? $username : "" ?>"/>
		<p style="display: none;color: red;" id="usernametaken">Dieser Benutzername wird bereits benutzt</p>
		<label class="formLabel">Password:</label>
		<input class="inputTextbox" type="password" name="password" />
        <input type="submit" value="Register" class="formSubmit" />
	</form>
</div>
