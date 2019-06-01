<?php

class Team {
   static function get($routeParams) {
        $team = json_decode(file_get_contents(dirname(__FILE__)."/_teams/".$routeParams['teamid'].".json"), true);
        return $team;
   }
   static function _get($teamid) {
        $team = json_decode(file_get_contents(dirname(__FILE__)."/_teams/".$teamid.".json"), true);
        return $team;
   }
   static function set($routeParams, $team) {
        file_put_contents(dirname(__FILE__)."/_teams/".$routeParams['teamid'].".json", json_encode($team, JSON_PRETTY_PRINT));
        return;
   } 
   static function add($routeParams) {
        $team = array();
        $team['name'] = $_REQUEST['name'];
        $team['homecolor'] = $_REQUEST['homecolor'];
        $team['awaycolor'] = $_REQUEST['awaycolor'];
        $routeParams['teamid'] = $team['name'];
        Team::set($routeParams, $team);
        header("Location: /teams/".$team['name']);
        return ;
   }
   static function edit($routeParams) {
        $item = Team::get($routeParams['teamid']);
        $item['name'] = isset($_REQUEST['name']) ? $_REQUEST['name'] : $item['name'];
        $item['homecolor'] = isset($_REQUEST['homecolor']) ? $_REQUEST['homecolor'] : $item['homecolor'];
        $item['awaycolor'] = isset($_REQUEST['awaycolor']) ? $_REQUEST['awaycolor'] : $item['awaycolor'];
        Team::set($routeParams, $item);
        header("Location: /teams/".$routeParams['teamid']);
        return ;
   }
   static function delete($routeParams) {
        $item = Team::get($routeParams['teamid']);
        $item['isdeleted'] = true;
        Team::set($routeParams, $item);
        header("Location: /teams/".$routeParams['teamid']);
        return ;
   }
   static function list($routeParams) {
   }
}
?>
