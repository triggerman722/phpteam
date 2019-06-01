<?php
    $body=<<<EOT
<a href="/teams/{$routeParams['teamid']}/seasons/{$routeParams['seasonid']}/events/add">Add Event</a>
EOT;

    for ($i=0;$i<count($content);$i++) {
        if(isset($content[$i]["isdeleted"]) && $content[$i]["isdeleted"]==true)
            continue;
        $item=<<<EOL
	<div>{$i}. <a href="/teams/{$routeParams['teamid']}/seasons/{$routeParams['seasonid']}/events/{$i}">{$content[$i]["name"]}</a></div>
        <div><a href="/teams/{$routeParams['teamid']}/seasons/{$routeParams['seasonid']}/events/{$i}/players">Players</a></div>
        <div><a href="/teams/{$routeParams['teamid']}/seasons/{$routeParams['seasonid']}/events/{$i}/players/add">Add Player</a></div>
	<div>{$content[$i]["date"]}</div>
	<div>{$content[$i]["time"]}</div>
EOL;
       $body.=$item;
    }
    require_once("views/base.php");
?>
