<?php
$body=<<<EOL
<form method="post">
Name: <input type=text name="name"><br/>
Date: <input type=date name="date"><br/>
Time: <input type=time name="time"><br/>

<input type="submit">
</form>
EOL;
    require_once("views/base.php");
?>
