<?php
$body=<<<EOL
<h1 You sure?</h1>
<form method="post">
<input type="submit" value="Yup">
</form>
<a href="javascript:window.history.back()">Nope</a>
EOL;
    require_once("views/base.php");
?>
