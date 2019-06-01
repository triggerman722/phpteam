<?php
session_start();

require_once("../routeprovider.php");
require_once("../team.php");
require_once("../player.php");
require_once("../user.php");
require_once("../event.php");
require_once("../season.php");
require_once("../thread.php");
require_once("../message.php");


RouteProvider::routeProvider_when("POST", '/login', '', "User::login");
RouteProvider::routeProvider_when("GET", '/login', 'views/login', "_default");
RouteProvider::routeProvider_when("GET", '/logout', '', "User::logout");

RouteProvider::routeProvider_when("POST", '/join', '', "User::join");
RouteProvider::routeProvider_when("GET", '/join', 'views/join', "_default");

require_once("../session_mgmt.php");

RouteProvider::routeProvider_when("GET", '/usr/:username', 'views/userview', "User::get");
RouteProvider::routeProvider_when("GET", '/teams/:teamid/seasons/:seasonid/events/:eventid/players/:playerid/confirmpresent', 'views/players/confirmpresent', '_default');
RouteProvider::routeProvider_when("POST", '/teams/:teamid/seasons/:seasonid/events/:eventid/players/:playerid/confirmpresent', '', "Player::confirmpresent");
RouteProvider::routeProvider_when("GET", '/teams/:teamid/seasons/:seasonid/events/:eventid/players/add', '/views/players/add', "_default");
RouteProvider::routeProvider_when("POST", '/teams/:teamid/seasons/:seasonid/events/:eventid/players/add', '', "Player::add");
RouteProvider::routeProvider_when("GET", '/teams/:teamid/seasons/:seasonid/events/:eventid/players/', '/views/players/list', "Player::list");

RouteProvider::routeProvider_when("GET", '/teams/add', '/views/teams/add', "_default");
RouteProvider::routeProvider_when("POST", '/teams/add', '', "Team::add");
RouteProvider::routeProvider_when("GET", '/teams/:teamid', '/views/teams/view', "Team::get");

RouteProvider::routeProvider_when("GET", '/teams/:teamid/edit', '/views/teams/edit', "Team::get");
RouteProvider::routeProvider_when("POST", '/teams/:teamid/edit', '', "Team::edit");

RouteProvider::routeProvider_when("GET", '/teams/:teamid/delete', '/views/teams/delete', "Team::get");
RouteProvider::routeProvider_when("POST", '/teams/:teamid/delete', '', "Team::delete");

RouteProvider::routeProvider_when("GET", '/teams/:teamid/seasons/', '/views/seasons/list', "Season::list");
RouteProvider::routeProvider_when("GET", '/teams/:teamid/seasons/add', '/views/seasons/add', "_default");
RouteProvider::routeProvider_when("POST", '/teams/:teamid/seasons/add', '', "Season::add");
RouteProvider::routeProvider_when("GET", '/teams/:teamid/seasons/:seasonid', '/views/seasons/view', "Season::get");

RouteProvider::routeProvider_when("GET", '/teams/:teamid/seasons/:seasonid/edit', '/views/seasons/edit', "Season::get");
RouteProvider::routeProvider_when("POST", '/teams/:teamid/seasons/:seasonid/edit', '', "Season::edit");

RouteProvider::routeProvider_when("GET", '/teams/:teamid/seasons/:seasonid/delete', '/views/seasons/delete', "Season::get");
RouteProvider::routeProvider_when("POST", '/teams/:teamid/seasons/:seasonid/delete', '', "Season::delete");

RouteProvider::routeProvider_when("GET", '/teams/:teamid/seasons/:seasonid/events', '/views/events/list', "Event::list");
RouteProvider::routeProvider_when("GET", '/teams/:teamid/seasons/:seasonid/events/add', '/views/events/add', "_default");
RouteProvider::routeProvider_when("POST", '/teams/:teamid/seasons/:seasonid/events/add', '', "Event::add");
RouteProvider::routeProvider_when("GET", '/teams/:teamid/seasons/:seasonid/events/:eventid', '/views/events/view', "Event::get");

RouteProvider::routeProvider_when("GET", '/teams/:teamid/seasons/:seasonid/events/:eventid/edit', '/views/events/edit', "Event::get");
RouteProvider::routeProvider_when("POST", '/teams/:teamid/seasons/:seasonid/events/:eventid/edit', '', "Event::edit");

RouteProvider::routeProvider_when("GET", '/teams/:teamid/seasons/:seasonid/events/:eventid/delete', '/views/events/delete', "Event::get");
RouteProvider::routeProvider_when("POST", '/teams/:teamid/seasons/:seasonid/events/:eventid/delete', '', "Event::delete");

RouteProvider::routeProvider_when("GET", '/teams/:teamid/threads/', '/views/threads/listteam', "Thread::listteam");
RouteProvider::routeProvider_when("GET", '/teams/:teamid/threads/add', '/views/threads/add', "_default");
RouteProvider::routeProvider_when("POST", '/teams/:teamid/threads/add', '', "Thread::addtoteam");

RouteProvider::routeProvider_when("GET", '/teams/:teamid/threads/:threadid/messages', '/views/messages/listteam', "Message::listteam");
RouteProvider::routeProvider_when("POST", '/teams/:teamid/threads/:threadid/messages', '', "Message::addtoteam");

function _default($routeParams) {
	return "";
}

?>
