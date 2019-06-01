<?php
$body=<<<EOL
<form method="post">
Name: <input type=text name="name"><br/>
From: <input type=text name="from"><br/>
To: <input type=text name="to"><br/>

<input type="submit">
</form>
EOL;
    require_once("views/base.php");
?>
