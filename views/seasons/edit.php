<?php
$body=<<<EOL
<form method="post">
Name: <input type=text name="name" value="{$content['name']}" ><br/>
From: <input type=text name="from" value="{$content['from']}"><br/>
To: <input type=text name="to" value="{$content['to']}"><br/>
<input type="submit">
</form>
<a href="/teams/{$routeParams['teamid']}/seasons/{$routeParams['seasonid']}/delete">Delete</a>
EOL;
    require_once("views/base.php");
?>
