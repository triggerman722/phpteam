<?php
$players = Player::list($routeParams);
    $body=<<<EOT
<div><a href="/teams/{$routeParams['teamid']}/seasons/{$routeParams['seasonid']}/events">Calendar</a></div>
<a href="/teams/{$routeParams['teamid']}/seasons/{$routeParams['seasonid']}/events/{$routeParams['eventid']}/edit">Edit</a> | <a href="/teams/{$routeParams['teamid']}/seasons/{$routeParams['seasonid']}/events/{$routeParams["eventid"]}/delete">Delete</a> 
EOT;

   $item=<<<EOL
	<div>{$content["name"]}</a> <a href="/teams/{$routeParams['teamid']}/seasons/{$routeParams['seasonid']}/events/{$routeParams['eventid']}/players/add">Add Player</a></div>
	<div>{$content["date"]}</div>
	<div>{$content["time"]}</div>
	<div><a href="/teams/{$routeParams['teamid']}/seasons/{$routeParams['seasonid']}/events/{$routeParams['eventid']}/players/">Players</a></div>
EOL;
for ($i=0;$i<count($players);$i++) {
   $body.="<h1>".$players[$i]["name"]."</h1>";
   $body.="<h1>Confirmaton state:".$players[$i]["attendance"]."</h1>";
}
       $body.=$item;
    require_once("views/base.php");
?>
