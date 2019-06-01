<?php

class Message {
   static function addtoseason($routeParams) {
        $team = Team::get($routeParams);
        $item = array();
        $item['name'] = $_REQUEST['name'];
        $item['created'] = date();
        $item['author'] = $username;
        $team["seasons"][$routeParams['seasonid']]["threads"][$routeParams['threadid']]["messages"][] = $item;
        $id = count($team["seasons"][$routeParams['seasonid']]["threads"][$routeParams['threadid']]["messages"])-1;
        Team::set($routeParams, $team);
        header("Location: /teams/".$routeParams['teamid']."/seasons/".$routeParams['seasonid']."/threads/".$routeParams['threadid']."/messages/");
        return ;
   }
   static function addtoteam($routeParams) {
        global $username;
        $team = Team::get($routeParams);
        $item = array();
        $item['name'] = $_REQUEST['name'];
        $item['created'] = time();
        $item['author'] = $username;
        $team["threads"][$routeParams['threadid']]["messages"][] = $item;
        $id = count($team["threads"][$routeParams['threadid']]["messages"])-1;
        Team::set($routeParams, $team);
        header("Location: /teams/".$routeParams['teamid']."/threads/".$routeParams['threadid']."/messages/");
        return ;
   }
   static function listteam($routeParams) {
        $team = Team::get($routeParams);
        $items = $team["threads"][$routeParams['threadid']]["messages"];
        array_multisort (array_column($items, 'created'), SORT_DESC, $items);
        return $items;
   }  
   static function listseason($routeParams) {
        $team = Team::get($routeParams);
        $items = $team["seasons"][$routeParams['seasonid']]["threads"][$routeParams['threadid']]["messages"];
        return $items;
   }  
}
?>
