<?php

$event = Event::get($routeParams);
    $body=<<<EOT
<a href="/teams/{$routeParams['teamid']}/seasons/{$routeParams['seasonid']}/events/{$routeParams['eventid']}">{$event["name"]}</a>
EOT;

    for ($i=0;$i<count($content);$i++) {
        $item=<<<EOL
	<div>{$i}. {$content[$i]["name"]} attendance: {$content[$i]["attendance"]} <a href="/teams/{$routeParams['teamid']}/seasons/{$routeParams['seasonid']}/events/{$routeParams['eventid']}/players/{$i}/confirmpresent">Conf</a></div>


EOL;
       $body.=$item;
    }
    require_once("views/base.php");
?>
