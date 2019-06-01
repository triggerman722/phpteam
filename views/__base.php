<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <link href="/resources/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/resources/css/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type='text/css'>
    <title><?php echo $title; ?></title>
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="/">sporteasy</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav mr-auto">
            </ul>
<?php
if (!isset($username)) {
?>
                <a class="btn btn-primary mr-2" href="/join">Start Your FREE Trial »</a>
                <a class="btn btn-outline-light" href="/login">Login</a>
<?php
} else {
?>
                <a class="btn btn-warning mr-2" href="/teams/subscription">GO PREMIUM</a>
<div class="dropdown mr-2">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">TEAMNAME
  </button>
  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="/teams/1/">TEAMNAME</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="/teams/2/">TEAMNAME2</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="/join"><i class="fa fa-users"></i> Join a team</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="/teams/create"><i class="fa fa-plus"></i> Create new team</a>
  </div>
</div>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account
  </button>
  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="/usr/<?php echo $username; ?>/profile/parameters/edit">My Settings</a>
    <a class="dropdown-item" href="/usr/<?php echo $username; ?>/profile">My Sporteasy Account</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="/logout">Sign out</a>
  </div>
</div>
<?php
}
?>
            </ul>
        </div>
      </nav>
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="/">sporteasy</a>
        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
<div class="dropdown">
  <a class="dropdown-toggle nav-link" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Events</a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="/teams/1/calendarlist/2018-2019/all">Schedule (list)</a>
    <a class="dropdown-item" href="/teams/2/calendar/2018-2019/all">Schedule (calendar)</a>
    <a class="dropdown-item" href="/teams/1/events/new"><i class="fa fa-plus"></i> Add event(s)</a>
    <a class="dropdown-item" href="/teams/1/events/championship/creation"><i class="fa fa-plus"></i> Add league season</a>
    <a class="dropdown-item" href="/teams/create"><i class="fa fa-gear"></i> Settings</a>
  </div>
</div></li>
                <li class="nav-item">
<div class="dropdown">
  <a class="dropdown-toggle nav-link" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Members</a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="/teams/1/members/2018-2019/">Team roster</a>
    <a class="dropdown-item" href="/teams/1/invite/choices"><i class="fa fa-plus"></i> Invite new members</a>
  </div>
</div></li>
                <li class="nav-item">
<div class="dropdown">
  <a class="dropdown-toggle nav-link" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Attendance</a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="/teams/1/stats/presence/">Summary</a>
    <a class="dropdown-item" href="/teams/1/stats/presence/events">Attendance by event</a>
    <a class="dropdown-item" href="/teams/1/stats/chores">Chores Assignment</a>
  </div>
</div></li>
                <li class="nav-item">
<div class="dropdown">
  <a class="dropdown-toggle nav-link" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Stats</a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="/teams/1/stats/">Team stats</a>
    <a class="dropdown-item" href="/teams/1/stats/players">Player stats</a>
  </div>
</div></li>
                <li class="nav-item">
<div class="dropdown">
  <a class="dropdown-toggle nav-link" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Messages (0)</a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="/forum">Inbox</a>
    <a class="dropdown-item" href="/forum/new">New Message</a>
  </div>
</div></li>
                <li class="nav-item">
<div class="dropdown">
  <a class="dropdown-toggle nav-link" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Fee Collection</a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="/teams/1/payments">List of team fees</a>
    <a class="dropdown-item" href="/teams/1/payment-account/general-info">Payment Recipient</a>
    <a class="dropdown-item" href="/teams/1/payments/create"><i class="fa fa-plus"></i> Create team fee</a>
  </div>
</div></li>
            </ul>
        </div>
      </nav>
<?php if(isset($prebody)){echo $prebody;}?>
    <div class="container mt-2">
    <?php echo $body; ?>
    <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          <div class="col-12 col-md">
            <img class="mb-2" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
            <small class="d-block mb-3 text-muted">&copy; 2017-2018</small>
          </div>
          <div class="col-6 col-md">
            <h5>Features</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Cool stuff</a></li>
              <li><a class="text-muted" href="#">Random feature</a></li>
              <li><a class="text-muted" href="#">Team feature</a></li>
              <li><a class="text-muted" href="#">Stuff for developers</a></li>
              <li><a class="text-muted" href="#">Another one</a></li>
              <li><a class="text-muted" href="#">Last time</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Resources</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Resource</a></li>
              <li><a class="text-muted" href="#">Resource name</a></li>
              <li><a class="text-muted" href="#">Another resource</a></li>
              <li><a class="text-muted" href="#">Final resource</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Team</a></li>
              <li><a class="text-muted" href="#">Locations</a></li>
              <li><a class="text-muted" href="#">Privacy</a></li>
              <li><a class="text-muted" href="#">Terms</a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
<script src="/resources/js/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="/resources/js/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="/resources/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>


