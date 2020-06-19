<?php
require "header.php";
?>
<main>
<div>
<h1>Signup</h1>
<form action="includes/signup.inc.php" method="post">
<input type="text" name="uid" placeholder="Username"><br><br>
<input type="text" name="mail" placeholder="E-mail"><br><br>
<input type="password" name="pwd" placeholder="Password"><br><br>
<input type="text" name="pwd-repeat" placeholder="Repeat password"><br><br>
<button type="submit" name="signup-submit">Signup</button>
</main>
</form>
</div>
<?php
require "footer.php";
?>