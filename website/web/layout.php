<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<!-- Jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Jquery Ende-->
<!-- CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
<?php
include "style.css";
?>
</style>
<!-- CSS Ende-->
<title>Youtube</title>
</head>
<body>
		<?php
			LucStr\MessageHandler::renderMessages();
		?>
        <div id="maincontent">
        	<?php include $view ?>
        </div>
        <div id="loginlogoutButton">
          <?php if(isset($_SESSION['username'])) { ?>
              <a class="actionLink" href="/Login/Logout">Ausloggen</a>
          <?php } else {
          	?>
          	 <a class="actionLink" href="/Login/">Einloggen</a>
          	<?php
          }?>
        </div>
</body>
</html>
