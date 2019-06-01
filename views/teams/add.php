<?php
$body=<<<EOL
<form method="post">
Name: <input type=text name="name"><br/>
Home Color: <input type=color name="homecolor"><br/>
Away Color: <input type=color name="awaycolor"><br/>
<input type="submit">
</form>
EOL;
    require_once("views/base.php");
?>
