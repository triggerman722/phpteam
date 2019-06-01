<?php
require_once("team.php");

class Player {
    static function confirmpresent($routeParams) {
        $team = Team::get($routeParams);
        $team["seasons"][$routeParams["seasonid"]]["events"][$routeParams["eventid"]]["players"][$routeParams["playerid"]]["attendance"] = $_REQUEST['attending'];
        Team::set($routeParams, $team);
        $team = Team::get($routeParams);
        header("Location: /teams/".$routeParams['teamid']."/seasons/".$routeParams['seasonid']."/events/".$routeParams['eventid']."/players");
   }
   static function add($routeParams) {
        $team = Team::get($routeParams);
        $player = array();
        $player['name'] = $_REQUEST['name'];
        $player['attendance'] = 0;
        $team["seasons"][$routeParams["seasonid"]]["events"][$routeParams["eventid"]]["players"][] = $player;
        $playerid = count($team["seasons"][$routeParams["seasonid"]]["events"][$routeParams["eventid"]]["players"])-1;
        Team::set($routeParams, $team);
        header("Location: /teams/".$routeParams['teamid']."/seasons/".$routeParams['seasonid']."/events/".$routeParams['eventid']."/players/".$playerid);
        return ;
   }
   static function list($routeParams) {
        $team = Team::get($routeParams);
        $players = [];
        if(array_key_exists("players", $team["seasons"][$routeParams["seasonid"]]["events"][$routeParams["eventid"]])) {
            $players = $team["seasons"][$routeParams["seasonid"]]["events"][$routeParams["eventid"]]["players"];
        }
        return $players;
   }  
}
?>
