<?php
    $body=<<<EOT
<a href="/teams/{$routeParams['teamid']}/seasons/{$routeParams['seasonid']}/edit">Edit</a> | <a href="/teams/{$routeParams['teamid']}/seasons/{$routeParams['seasonid']}/delete">Delete</a> 
EOT;

   $item=<<<EOL
	<div>{$content["name"]}</a> <a href="/teams/{$routeParams['teamid']}/seasons/{$routeParams['seasonid']}/events/add">Add event</a></div>
<div><a href="/teams/{$routeParams['teamid']}/seasons/{$routeParams['seasonid']}/events">Calendar</a></div>
	<div><a href="/teams/{$routeParams['teamid']}/seasons/{$routeParams['seasonid']}/threads/add">Add Chat Thread</a></div>
	<div>{$content["from"]}</div>
	<div>{$content["to"]}</div>
EOL;
       $body.=$item;
    require_once("views/base.php");
?>
