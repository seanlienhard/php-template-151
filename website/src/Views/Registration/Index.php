<h1>Registration</h1>
<div class="formular">
	<form action="/Registration/Register" method="POST">
		<?= $html->renderCSRF() ?>
		<label>Email:</label>
		<input id="email" type="text" name="email" value="<?= (isset($email)) ? $email : "" ?>"/>
		<label>Username:</label>
		<input id="username" type="text" name="username" value="<?= (isset($username)) ? $username : "" ?>"/>
		<p style="display: none;color: red;" id="usernametaken">Dieser Benutzername wird bereits benutzt</p>
		<label>Passoword:</label>
		<input type="password" name="password" />
        <input type="submit" value="Register" class="formSubmit" />
	</form>
</div>