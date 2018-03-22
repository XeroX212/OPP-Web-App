<!DOCTYPE html>
<html>
<head>
<title>OPP App</title>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/validation.js"></script>
<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
<link type="text/css" rel="stylesheet" href="css/index.css" media="screen,projection" />
<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

</head>

<body id="login">

	<div class="container">
	  <div class="logo center"><img src="/img/logo.png" alt="OPP Logo" /></div>
			<form class="form col s12" method="post" action="validate.php">
			<div class="row">
				<div class="input-field col s12">
					<i class="material-icons prefix">account_circle</i>
					<input id="loginUser" class="validate" type="text" name="username" required>
					<label for="icon_prefix">Username</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<i class="material-icons prefix">lock</i>
					<input id="loginPass"class="validate" type="password" name="password" required>
					<label for="icon_prefix">Password</label>
				</div>
			</div>
			<div class="row">
				<div id="loginTerms" class="input-field col s12">
					<input id="filled-in-box" type="checkbox" class="filled-in" required>
      		<label for="filled-in-box">I Agree To The <a href="#">Terms & Conditions</a></label>
				</div>
			</div>
			<div class="row">
				<input class="login-btn btn col s12" type="submit" value="Login" />
			</div>
			<div id="loginForgot" class="row">
				<a href="#">Forgot Your Password?</a> // <a href="#">Need Access?</a>
			</div>
		</form>
	</div>

</body>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="js/materialize.min.js"></script>

</html>
