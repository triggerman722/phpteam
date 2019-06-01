<?php
    $body=<<<EOT
<a href="/teams/{$routeParams['teamid']}/seasons/add">Add a season</a>
EOT;

    for ($i=0;$i<count($content);$i++) {
        if(isset($content[$i]["isdeleted"]) && $content[$i]["isdeleted"]==true)
            continue;
        $item=<<<EOL
	<div><a href="/teams/{$routeParams['teamid']}/seasons/{$i}/">{$i}. {$content[$i]["name"]}</a> <a href="/teams/{$routeParams['teamid']}/seasons/{$i}/events/add">Add event</a></div>
	<div><a href="/teams/{$routeParams['teamid']}/seasons/{$i}/threads/add">Add Chat Thread</a></div>
	<div>{$content[$i]["from"]}</div>
	<div>{$content[$i]["to"]}</div>
EOL;
       $body.=$item;
    }
    require_once("views/base.php");
?>
