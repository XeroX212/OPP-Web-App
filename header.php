<!DOCTYPE html>
<html>
<head>
<title>OPP App</title>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script>
<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
<link type="text/css" rel="stylesheet" href="css/index.css" media="screen,projection" />
<link rel="stylesheet" href="css/map.css" />
<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

</head>

<body>
  <header class="navbar-fixed">
    <nav>
        <div class="nav-wrapper black">
            <a href="#!" class="brand-logo"><img class="responsive-img" id="logo" src="/img/logo.png" /></a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="hide-on-med-and-down right">
                <!--<li class="search">
                    <input id="box" type="text" name="Search" placeholder="Search" class="center" />
                </li>
                <li><a href="#"><i class="material-icons" id="align">search</i></a></li>-->
                <li><a href="/dashboard.php">DASHBOARD</a></li>
                <li><a href="/index.php" class="active">MAP</a></li>
                <li><a href="/userguide.php">USER GUIDE</a></li>
                <li><a href="/markers.php">COMMENT LOG</a></li>
                <li><a href="/logout.php" class="waves-effect waves-light btn">LOGOUT</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li><img src="/img/logo.png" class="responsive-img" class="mobile-logo" /></li>
                <li><a href="/dashboard.php">DASHBOARD</a></li>
                <li><a href="/index.php">MAP</a></li>
                <li><a href="/userguide.php">USER GUIDE</a></li>
                <li><a href="/markers.php">COMMENT LOG</a></li>
                <li><a href="/logout.php">LOGOUT</a></li>
            </ul>
        </div>
    </nav>
  </header>
