<?php
    $body=<<<EOT
<a href="/teams/{$routeParams['teamid']}/seasons/{$routeParams['seasonid']}/threads/{$routeParams['threadid']}/messages/add">Add a new message</a>
EOT;

    for ($i=0;$i<count($content);$i++) {
        $item=<<<EOL
	<div>{$i}. {$content[$i]["name"]} </div>
	<div>{$content[$i]["created"]}</div>
	<div>{$content[$i]["author"]}</div>
EOL;
       $body.=$item;
    }
    require_once("views/base.php");
?>
