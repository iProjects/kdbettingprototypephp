

<?php
session_start();
if (!(isset($_SESSION['logincookie'])) || $_SESSION['logincookie'] != "true")
{ 
$_SESSION['logincookie'] = "false";
header('Location: kdLogin.php');
}
  
?>



<html lang="en">

<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width" />
<title>About - KDBETTING</title>
<link href="Images/Dollar.ico" rel="shortcut icon" type="image/x-icon" />

<link rel="stylesheet" href="Content/Site.css" type="text/css" media="all"> 

<script type="text/javascript" src="Scripts/jquery-2.0.3.js" ></script>
<script type="text/javascript" src="Scripts/jquery-ui-1.8.20.js"></script>
<script type="text/javascript" src="Scripts/CustomScripts.js" ></script>
<script type="text/javascript" src="Scripts/modernizr-2.5.3.js"></script>
<script type="text/javascript" src="Scripts/jquery.validate.unobtrusive.js"></script>
<script type="text/javascript" src="Scripts/jquery.validate"></script>
<script type="text/javascript" src="Scripts/jquery.unobtrusive-ajax.js"></script>
<script type="text/javascript" src="Scripts/knockout-2.1.0.js"></script>
<script type="text/javascript" src="Scripts/modernizr-2.5.3.js"></script>
<script type="text/javascript" src="Scripts/jquery.tablesorter.js"></script>
<script type="text/javascript" src="Scripts/jquery.tablesorter.pager"></script>
<script type="text/javascript" src="Scripts/knockout-2.1.0.debug.js"></script>


</head>


<body>

<header>
<div class="content-wrapper">

<div class="float-left">
<p class="site-title">
KDBetting
</p>
</div>


<div class="float-right">
<section id="login">
    
<?php
if (!(isset($_SESSION['logincookie'])) || $_SESSION['logincookie'] != "true")
{ 
echo '<div  class="floatleft">
 <a id="btnSubmitRegisterForm" style="cursor: pointer;" href="kdRegister.php">Register</a>
 
<a id="btnSubmitLoginForm" style="cursor: pointer;" href="kdLogin.php">Login</a>
 </div>';
} 
else 
{ 
    
if(isset($_SESSION['loggedinuser']))
{
    
$loggedinuser = $_SESSION['loggedinuser'];

echo '<div  class="floatleft">
<a style="cursor: text;" > Welcome To KDBetting, ' .  htmlspecialchars(strtoupper($loggedinuser)) . '</a>
    
<a id="btnSubmitLogOutForm" style="cursor: pointer;" href="kdLogOut.php" title="Log Off">Log Off</a>
</div>' ;

}

}
?>
    
</section>
</div>



<div id="nav">
<ul id="menu">

<li>

<div class="floatleft">

<div>
<a id="btnSubmitIndexForm" style="cursor: pointer;" href="kdHome.php">Home</a>

</div>    

</div>

</li>


<li>

<div class="floatleft">

<div>
<a id="btnSubmitUsersForm" style="cursor: pointer;" href="kdUsers.php">Users</a>

</div>    

</div>

</li>

<li>

<div class="floatleft">

<div>
<a id="btnSubmitBetsForm" style="cursor: pointer;" href="kdBets.php">Bets</a>

</div>    

</div>

</li>

<li>

<div class="floatleft">

<div>
<a id="btnSubmitGamesForm" style="cursor: pointer;" href="kdGames.php">Games</a>

</div>    

</div>

</li>

<li>

<div class="floatleft">

<div>
<a id="btnSubmitAccountsForm" style="cursor: pointer;" href="kdAccounts.php">Accounts</a>

</div>    

</div>

</li>


<li id="mnuMyProfile">

<div>

<div>
<a id="btnSubmitEditProfileForm" style="cursor:text;" >My Profile</a>

</div>    

</div>

<ul class="submenu">

<li id="subMenuMyProfile">

<div>

<div>
<a id="btnSubmitEditProfileSubForm" style="cursor: pointer;" href="kdManageProfile.php">My Profile</a>

</div>    

</div>

</li>

<li>

<div class="floatleft">

<div>
<a id="btnSubmitMyBetsForm" style="cursor: pointer;" href="kdMyBets.php">My Bets</a>

</div>    

</div>

</li>

<li id="subMenuBetGroups">

<div class="floatleft">

<div>
<a id="btnSubmitMyBetGroupsForm" style="cursor: pointer;" href="kdMyBetGroups.php">My Bet Groups</a>
</div>    

</div>

</li>



<li id="subMenuMyBetScores">

<div class="floatleft">

<div>
<a id="btnSubmitMyBetScoresForm" style="cursor: pointer;" href="kdMyBetScores.php">My Bet Scores</a>

</div>    

</div>

</li>



<li id="subMenuChangePassword">

<div class="floatleft">

<div>
<a id="btnSubmitChangePasswordForm" style="cursor: pointer;" href="kdChangePassWord.php">Change Password</a>
</div>    

</div>

</li>


<li id="subMenuDeRegister">

<div class="floatleft">

<div>
<a id="btnSubmitDeRegisterForm" style="cursor: pointer;" href="kdDeregister.php">DeRegister</a>

</div>    

</div>

</li>



<li id="subMenuWithDraw">

<div class="floatleft">

<div>
<a id="btnSubmitWithDrawCashForm" style="cursor: pointer;" href="kdWithdraw.php">WithDraw</a>

</div>    

</div>

</li>

</ul>
</li>




<li><a>Help</a>
<ul class="submenu">
<li>

<div class="floatleft">

<div>
<a id="btnSubmitHelpForm" style="cursor: pointer;" href="kdHelp.php">Help</a>

</div>    

</div>

</li>

<li>

<div class="floatleft">

<div>
<a id="btnSubmitContactUsForm" style="cursor: pointer;" href="kdContactUs.php">Contact Us</a>

</div>    

</div>

</li>

<li>

<div class="floatleft">

<div>
<a id="btnSubmitContactsForm" style="cursor: pointer;" href="kdContacts.php">Contacts</a>

</div>    

</div>

</li>

<li>

<div class="floatleft">

<div>
<a id="btnSubmitAboutForm" style="cursor: pointer;" href="kdAbout.php">About</a>

</div>    

</div>

</li>

</ul>
</li>




</ul>
</div>


</div>


</header>




<div id="body">


<section class="content-wrapper main-content clear-fix">

<div id="error-display-div" class="displaynone">
</div>


</section>


</div>




<footer>

<hr />

<div class="content-wrapper">
<div class="float-left">

<a href="https://www.facebook.com/SoftwareProvidersLtd" title="Facebook" target="_blank">FaceBook</a>|
<a href="http://twitter.com/" title="Twitter" target="_blank">Twitter</a>|
<a href="https://plus.google.com/" title="Google+" target="_blank">Google+</a>|
<a href="http://www.linkedin.com/" title="LinkedIn" target="_blank">LinkedIn</a>|
<a href="#" title="Blog">Blog</a>|
<a href="#" title="Discussion board">Discussion board</a> |
<a href="#" title="Press">Press</a>|
<a href="#" title="Terms">Terms</a>|                    
<a href="#" title="Jobs">Jobs</a>|                    
<a href="#" title="Privacy policy">Privacy policy</a>|
<a href="#" title="Principles">Principles</a>


</div>
</div>


<div class="content-wrapper clearboth">
<div class="float-left">
<p style="font-size: 15px">Copyright &copy; KDBETTING. All Rights Reserved.</p>
</div>
</div>


<div class="content-wrapper clearboth">
<div>

</div>
</div>


</footer>




</body>


</html>
