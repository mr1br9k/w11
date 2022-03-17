<h3>Autorization Form</h3>

<form action="index.php?page=5" method="post">
<div class="form-group">
<label for="login">Login:</label>
<input type="text" class="form-control" name="login">
</div>
<div class="form-group">
<label for="pass">Password:</label>
<input type="password" class="form-control" name="pass">
</div>

<button type="submit" class="btn btn-primary" name="regbtn">Autorization</button>
</form>

<?php

if (login($_POST['login'],$_POST['pass']))
{
	echo "<h3/><span style='color:green;'> Auth!</span><h3/>";
	
}
else
{
	echo "<h3/><span style='color:green;'> Not Auth!</span><h3/>";
}
	
$redirectTo = '/home';

function redirectTo()
{
	if (auth()->user()->role_id == 1) {
		return '/admin';
	}
	return '/home';
}

?>