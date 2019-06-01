<?php
$body=<<<EOL
<form method="post">
Name: <input type=text name="name" value="{$content['name']}" ><br/>
Date: <input type=date name="date" value="{$content['date']}"><br/>
Time: <input type=time name="time" value="{$content['time']}"><br/>
<input type="submit">
</form>
<a href="/teams/{$routeParams['teamid']}/seasons/{$routeParams['seasonid']}/events/{$routeParams['eventid']}/delete">Delete</a>
EOL;
    require_once("views/base.php");
?>
