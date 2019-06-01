<?php
    $body=<<<EOT
<a href="/teams/{$routeParams['teamid']}/threads/add">Add a new thread</a>
EOT;

    for ($i=0;$i<count($content);$i++) {
        $item=<<<EOL
	<div>{$i}. <a href="/teams/{$routeParams['teamid']}/threads/{$i}/messages/">{$content[$i]["name"]}</a></div>
	<div>{$content[$i]["created"]}</div>
	<div>{$content[$i]["author"]}</div>
EOL;
       $body.=$item;
    }
    require_once("views/base.php");
?>
