<?php
    $body=<<<EOT
<form method="post">
Name: <input type=text name="name">
<input type="submit">
</form>
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
