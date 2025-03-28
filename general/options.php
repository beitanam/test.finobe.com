<?php
include($_SERVER['DOCUMENT_ROOT'] . '/general/loadingValues/generalConfigs.php');
include($_SERVER['DOCUMENT_ROOT'] . '/general/loadingValues/userInfo.php');
$extraBtn = null;
switch(true){
	case ($FinobeToken):
		if($loggedIn->userRank == "admin"){
			$extraBtn = "<li class='nav-item'><a href='". $baseUrl ."/admin' class='nav-link'>Admin Panel</a></li>";
		}
		echo "<nav class='navbar navbar-expand-lg navbar-light  bg-faded navbar-static-top'>
	   <div class='container'>
		  <a href='". $baseUrl ."/' class='navbar-brand'><img src='". $baseUrl ."/imgs/finobesvg.svg' alt='". $ProjectName ."' class='navbar-brandimg d-inline-block mr-2' style='width: auto;'>". $ProjectName ."</a> <button type='button' data-toggle='collapse' data-target='#navbar-collapse' aria-controls='navbar-collapse' aria-expanded='false' aria-label='Toggle navigation' class='navbar-toggler navbar-toggler-right'><span class='navbar-toggler-icon'></span></button> 
		  <div id='navbar-collapse' class='collapse navbar-collapse'>
			 <ul class='nav navbar-nav mr-auto'>
				<li class='nav-item'><a href='". $baseUrl ."/user/". $loggedIn->userId ."' class='nav-link'>Profile</a></li>
				<li class='nav-item'><a href='". $baseUrl ."/places' class='nav-link'>Games</a></li>
				<li class='nav-item'><a href='". $baseUrl ."/catalog' class='nav-link'>Catalog</a></li>
				<li class='nav-item'><a href='". $baseUrl ."/forum' class='nav-link'>Forum</a></li>
				<li class='nav-item'><a href='". $baseUrl ."/users' class='nav-link'>Users</a></li>
				<li class='nav-item'><a href='". $baseUrl ."/blog' class='nav-link'>Blog</a></li>
				". $extraBtn ."
				<li class='nav-item dropdown'>
				   <a href='#' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' class='nav-link dropdown-toggle'><strong>More</strong></a> 
				   <div class='navbar-nobelium-dropdown dropdown-menu'><a href='". $baseUrl ."/wiki/' class='dropdown-item'>Blog</a> <a href='". $baseUrl ."/videos' class='dropdown-item'>Discord</a></div>
				</li>
			 </ul>
			 <ul class='nav navbar-nav my-2 my-lg-0'>
				<li class='nav-item'><a href='". $baseUrl ."/app/inbox' class='nav-link'><i aria-hidden='true' class='far align-middle fa-envelope mr-1'></i></a></li>
				<li class='nav-item dropdown dropdown-notifications'>
				   <a href='#' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' class='nav-link dropdown-toggle'><i aria-hidden='true' class='far fa-bell align-middle mr-1'></i> <span class='caret'></span></a> 
				   <div class='dropdown-menu dropdown-menu-right'>
					  <div class='dropdown-header'><span class='align-middle'>Messages</span></div>
					  <div class='dropdown-divider'></div>
					  <div class='navbar-notification-list'><a data-notify-id='196905' href='#' class='notification-title notification-link dropdown-item'><i aria-hidden='true' class='far fa-envelope align-center fa-fw'></i> TestMsgPreview</a></div>
				   </div>
				</li>
				<li class='nav-item dropdown'>
				   <a href='#' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' class='nav-link dropdown-toggle'><i aria-hidden='true' class='fas fa-users align-middle'></i> <span>&nbsp;</span></a> 
				   <div class='navbar-nobelium-dropdown dropdown-menu dropdown-menu-right'><a href='". $baseUrl ."/app/inbox' class='dropdown-item'>
					  Messages																	</a> <a href='". $baseUrl ."/app/friends' class='dropdown-item'>Friends</a>
				   </div>
				</li>
				<li data-animation='false' data-toggle='tooltip' data-placement='bottom' title='' class='nav-item nav-link n-money-text' data-original-title='". $loggedIn->userDius ." " . $CurrencyName . "'><a><img src='" . $CurrencyIcon . "' alt='" . $CurrencyName . "' title='" . $CurrencyName . "' class='img-responsive align-middle' width='20' height='20'> ". $loggedIn->userDius ."</a></li>
				<li class='nav-item dropdown'>
				   <a href='#' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' class='nav-link dropdown-toggle'><i aria-hidden='true' class='far align-middle fa-user mr-1'></i> ". htmlspecialchars($loggedIn->userName) ." <span class='caret'></span></a> 
				   <div class='navbar-nobelium-dropdown dropdown-menu dropdown-menu-right'><a href='". $baseUrl ."/create' class='dropdown-item'><i aria-hidden='true' class='fas fa-fw fa-plus align-middle mr-1'></i> Create</a> <a href='". $baseUrl ."/character' class='dropdown-item'><i aria-hidden='true' class='fas fa-fw fa-user align-middle mr-1'></i> Character</a> <a href='". $baseUrl ."/app/settings' class='dropdown-item'><i aria-hidden='true' class='fas fa-fw fa-wrench align-middle mr-1'></i> Settings</a> <a href='". $baseUrl ."/app/logout' class='dropdown-item'><i aria-hidden='true' class='fas fa-fw fa-sign-out-alt align-middle mr-1'></i> Logout</a></div>
				</li>
			 </ul>
		  </div>
	   </div>
	</nav>
	<div class='nav-scroller navbar-light bg-faded mb-3'>
   <div class='container'>
      <nav class='nav nav-underline nav-scroller-inner'>
         <a class='nav-link' href='". $baseUrl ."/create'><i class='far align-middle fa-fw fa-plus mr-1'></i> Create</a>
         <a class='nav-link' href='". $baseUrl ."/app/character'><i class='far align-middle fa-fw fa-user mr-1'></i> Avatar</a>
         <a class='nav-link' href='". $baseUrl ."/trades'><i class='far fa-fw align-middle fa-exchange-alt mr-1'></i> Trades</a>													</a>
      </nav>
   </div>
</div>";
		break;
	default:
		echo "<nav class='navbar navbar-expand-lg navbar-light  bg-faded navbar-static-top'>
   <div class='container'>
      <a href='". $baseUrl ."/' class='navbar-brand'><img src='". $baseUrl ."/imgs/finobesvg.svg' alt='". $ProjectName ."' class='navbar-brandimg d-inline-block mr-2' style='width: auto;'>". $ProjectName ."</a> <button type='button' data-toggle='collapse' data-target='#navbar-collapse' aria-controls='navbar-collapse' aria-expanded='false' aria-label='Toggle navigation' class='navbar-toggler navbar-toggler-right'><span class='navbar-toggler-icon'></span></button> 
      <div id='navbar-collapse' class='collapse navbar-collapse'>
         <ul class='nav navbar-nav mr-auto'></ul>
         <ul class='nav navbar-nav my-2 my-lg-0'>
            <li class='nav-item'><a href='". $baseUrl ."/app/login' class='nav-link'>Login</a></li>
            <li class='nav-item'>
               <div></div>
               <div class='us'><a href='". $baseUrl ."/app/register' class='nav-link'>Register</a></div>
            </li>
         </ul>
      </div>
   </div>
</nav>";
		break;
}
?>
