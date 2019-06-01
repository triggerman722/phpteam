<?php

class Thread {
   static function addtoseason($routeParams) {
        $team = Team::get($routeParams);
        $item = array();
        $item['name'] = $_REQUEST['name'];
        $item['created'] = date();
        $item['author'] = $username;
        $team["seasons"][$routeParams['seasonid']]["threads"][] = $item;
        $id = count($team["seasons"][$routeParams['seasonid']]["threads"])-1;
        Team::set($routeParams, $team);
        header("Location: /teams/".$routeParams['teamid']."/seasons/".$routeParams['seasonid']."/threads/".$id);
        return ;
   }
   static function addtoteam($routeParams) {
        global $username;
        $team = Team::get($routeParams);
        $item = array();
        $item['name'] = $_REQUEST['name'];
        $item['created'] = time();
        $item['author'] = $username;
        $messages = array();
        $messages[] = $item;
        $item['messages'] = $messages;

        $team["threads"][] = $item;
        $id = count($team["threads"])-1;
        Team::set($routeParams, $team);
        header("Location: /teams/".$routeParams['teamid']."/threads/".$id."/messages/");
        return ;
   }
   static function listteam($routeParams) {
        $team = Team::get($routeParams);
        $items = $team["threads"];
        return $items;
   }  
   static function listseason($routeParams) {
        $team = Team::get($routeParams);
        $items = $team["seasons"][$routeParams['seasonid']]["threads"];
        return $items;
   }  
}
?>
