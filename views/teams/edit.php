<?php
$body=<<<EOL
<form method="post">
Name: <input type=text name="name" value="{$content['name']}" ><br/>
Home Color: <input type=color name="homecolor" value="{$content['homecolor']}"><br/>
Away Color: <input type=color name="awaycolor" value="{$content['awaycolor']}"><br/>
<input type="submit">
</form>
<a href="/teams/{$routeParams['teamid']}/delete">Delete</a>
EOL;
    require_once("views/base.php");
?>
