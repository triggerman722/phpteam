<?php
$body=<<<EOL
<form method="post">
<h1>Attending?</h1>
<input type=radio name=attending value=0> No <br>
<input type=radio name=attending value=1> Yes <br>
<input type=radio name=attending value=2> Maybe <br>

<input type="submit">
</form>
EOL;
    require_once("views/base.php");
?>
