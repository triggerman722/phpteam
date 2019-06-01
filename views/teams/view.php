<?php
    $body=<<<EOT
<a href="/teams/{$routeParams['teamid']}/edit">Edit</a> | <a href="/teams/{$routeParams['teamid']}/delete">Delete</a> 
EOT;

   $item=<<<EOL
	<div>{$content["name"]}</a> <a href="/teams/{$routeParams['teamid']}/seasons/add">Add season</a></div>
<div><a href="/teams/{$routeParams['teamid']}/seasons/">Seasons</a></div>
	<div><a href="/teams/{$routeParams['teamid']}/threads/add">Add Chat Thread</a></div>
	<div>Home Color: <span style="background-color:{$content["homecolor"]}">&nbsp;&nbsp;&nbsp;&nbsp;</span></div>
	<div>Away Color: <span style="background-color:{$content["awaycolor"]}">&nbsp;&nbsp;&nbsp;&nbsp;</span></div>
EOL;
       $body.=$item;
    require_once("views/base.php");
?>
