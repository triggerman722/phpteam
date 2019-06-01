<?php
    $body=<<<EOT
<a href="/teams/{$routeParams['teamid']}/seasons/{$routeParams['seasonid']}/threads/add">Add a new thread</a>
EOT;

    for ($i=0;$i<count($content);$i++) {
        $item=<<<EOL
	<div>{$i}. {$content[$i]["name"]} <a href="/teams/{$routeParams['teamid']}/seasons/{$routeParams['seasonid']}/threads/{$i}/chatlines/add">Start Chat</a></div>
	<div>{$content[$i]["created"]}</div>
	<div>{$content[$i]["author"]}</div>
EOL;
       $body.=$item;
    }
    require_once("views/base.php");
?>
