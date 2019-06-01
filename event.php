<?php
require_once("team.php");

class Event {
   static function add($routeParams) {
        $team = Team::get($routeParams);
        $item = array();
        $item['name'] = $_REQUEST['name'];
        $item['date'] = $_REQUEST['date'];
        $item['time'] = $_REQUEST['time'];
        $team["seasons"][$routeParams['seasonid']]["events"][] = $item;
        $id = count($team["seasons"][$routeParams['seasonid']]["events"])-1;
        Team::set($routeParams, $team);
        header("Location: /teams/".$routeParams['teamid']."/seasons/".$routeParams['seasonid']."/events/".$id);
        return ;
   }
   static function edit($routeParams) {
        $team = Team::get($routeParams);
        $item = $team['seasons'][$routeParams['seasonid']]["events"][$routeParams['eventid']];
        $item['name'] = isset($_REQUEST['name']) ? $_REQUEST['name'] : $item['name'];
        $item['date'] = isset($_REQUEST['date']) ? $_REQUEST['date'] : $item['date'];
        $item['time'] = isset($_REQUEST['time']) ? $_REQUEST['time'] : $item['time'];
        $team['seasons'][$routeParams['seasonid']]["events"][$routeParams['eventid']] = $item;
        Team::set($routeParams, $team);
        header("Location: /teams/".$routeParams['teamid']."/seasons/".$routeParams['seasonid']."/events/".$routeParams['eventid']);
        return ;
   }
   static function delete($routeParams) {
        $team = Team::get($routeParams);
        $item = $team['seasons'][$routeParams['seasonid']]["events"][$routeParams['eventid']];
        $item['isdeleted'] = true;
        $team['seasons'][$routeParams['seasonid']]["events"][$routeParams['eventid']] = $item;
        Team::set($routeParams, $team);
        header("Location: /teams/".$routeParams['teamid']."/seasons/".$routeParams['seasonid']."/events/");
        return ;
   }
   static function get($routeParams) {
        $team = Team::get($routeParams);
        $item = $team['seasons'][$routeParams['seasonid']]["events"][$routeParams['eventid']];
        return $item;
   }
   static function list($routeParams) {
        $team = Team::get($routeParams);
        $items = $team["seasons"][$routeParams['seasonid']]["events"];
        return $items;
   }  
}
?>
