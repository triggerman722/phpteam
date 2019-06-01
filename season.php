<?php
require_once("team.php");

class Season {
   static function add($routeParams) {
        $team = Team::get($routeParams);
        $item = array();
        $item['name'] = $_REQUEST['name'];
        $item['from'] = $_REQUEST['from'];
        $item['to'] = $_REQUEST['to'];
        $team["seasons"][] = $item;
        $id = count($team["seasons"])-1;
        Team::set($routeParams, $team);
        header("Location: /teams/".$routeParams['teamid']."/seasons/".$id);
        return ;
   }
   static function edit($routeParams) {
        $team = Team::get($routeParams);
        $item = $team['seasons'][$routeParams['seasonid']];
        $item['name'] = isset($_REQUEST['name']) ? $_REQUEST['name'] : $item['name']; 
        $item['from'] = isset($_REQUEST['from']) ? $_REQUEST['from'] : $item['from']; 
        $item['to'] = isset($_REQUEST['to']) ? $_REQUEST['to'] : $item['to']; 
        $team['seasons'][$routeParams['seasonid']] = $item;
        Team::set($routeParams, $team);
        header("Location: /teams/".$routeParams['teamid']."/seasons/".$routeParams['seasonid']);
        return ;
   }
   static function delete($routeParams) {
        $team = Team::get($routeParams);
        $item = $team['seasons'][$routeParams['seasonid']];
        $item['isdeleted'] = true; 
        $team['seasons'][$routeParams['seasonid']] = $item;
        Team::set($routeParams, $team);
        header("Location: /teams/".$routeParams['teamid']."/seasons/");
        return ;
   }
   static function get($routeParams) {
        $team = Team::get($routeParams);
        $item = $team['seasons'][$routeParams['seasonid']];
        return $item;
   }
   static function list($routeParams) {
        $team = Team::get($routeParams);
        $items = $team["seasons"];
        return $items;
        //return array_filter($items, function($v, $k) {
        //    return ($k == 'isdeleted' && $v== true)? false : true;
        //}, ARRAY_FILTER_USE_BOTH);
   }  
}
?>
