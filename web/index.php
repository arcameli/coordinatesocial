<?php require_once("load.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>why? [<?PHP echo $page; ?>]</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/dark.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/theme_default.css">
</head>
<body class="dark-theme-l5">

    <!-- Navbar -->
    <div class="dark-top dark-theme-d2">
        <ul class="dark-navbar dark-left-align dark-large">
            <li class="dark-hide-medium dark-hide-large dark-opennav dark-right">
                <a class="dark-padding-large dark-hover-white dark-large dark-theme-d2" href="javascript:void(0);" onclick="dark.openNav()"><i class="fa fa-bars"></i></a>
            </li>
            <li data-page='intro' id='logo'><a href="javascript:dark.loadPage('intro');" class="dark-padding-large"><img src='/img/logo.png' /></a></li>
            <li data-page='home' class="dark-hide-small"><a href="javascript:dark.loadPage('home');" class="dark-padding-large dark-hover-white" title="News"><i class="fa fa-globe"></i></a></li>
            <li data-page='profile' class="dark-hide-small"><a href="javascript:dark.loadPage('profile');" class="dark-padding-large dark-hover-white" title="Account Settings"><i class="fa fa-user"></i></a></li>
            <li data-page='messages' class="dark-hide-small"><a href="javascript:dark.loadPage('messages');" class="dark-padding-large dark-hover-white" title="Messages"><i class="fa fa-envelope"></i></a></li>
            <li data-page='notifications' class="dark-hide-small dark-dropdown-hover">
                <a href="#" class="dark-padding-large dark-hover-white" title="Notifications"><i class="fa fa-bell"></i><span class="dark-badge dark-right dark-small dark-green">3</span></a>
                <div class="dark-dropdown-content dark-white dark-card-4">
                    <a href="#">One new friend request</a>
                    <a href="#">John Doe posted on your wall</a>
                    <a href="#">Jane likes your post</a>
                </div>
            </li>
            <?PHP if(isset($dark['profile']['picture'])) { ?>
            <li class="dark-hide-small dark-right dark-dropdown-hover">
                <a href="#" class="dark-padding-large" title="My Account"><img src="<?PHP echo $dark['profile']['picture']; ?>" class="dark-circle" style="height:25px;width:25px" alt="Avatar"></a>
                <div class="dark-dropdown-content dark-white dark-card-4">
                    <a href="#">My Profile</a>
                    <a href="#">Settings</a>
                    <a href="javascript:dark.logout();">Logout</a>
                </div>
            </li>
            <?PHP } ?>
        </ul>
    </div>
    <!-- Navbar on small screens -->
    <div id="navDemo" class="dark-hide dark-hide-large dark-hide-medium dark-top">
        <ul class="dark-navbar dark-left-align dark-large dark-theme">
            <li><a class="dark-padding-large" href="#">Link 1</a></li>
            <li><a class="dark-padding-large" href="#">Link 2</a></li>
            <li><a class="dark-padding-large" href="#">Link 3</a></li>
            <li><a class="dark-padding-large" href="#">My Profile</a></li>
        </ul>
    </div>

    <div id="dark-page"></div>
    
<br>
<!-- Footer -->
<footer class="dark-container dark-theme-d5">
  <p>Powered by nginx, php, bootstrap, and auth0</p>
  <p>Created by tehraven. Privacy. Terms of Service.</p>
</footer>

<script src="https://cdn.auth0.com/w2/auth0-6.7.js"></script>
<script src="https://cdn.auth0.com/js/lock/10.0/lock.min.js"></script>
<script src="https://checkout.stripe.com/checkout.js"></script>
<script src="js/dark.php"></script>
</body>
</html>

