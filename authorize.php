<?php
/*****************************************************************
Created :  2017-03-16
Author : Mr. Khwanchai Kaewyos (LookHin)
E-mail : khwanchai@gmail.com
Website : https://www.unzeen.com
Facebook : https://www.facebook.com/LookHin
Source Code On Github : https://github.com/LookHin/google-drive-api
*****************************************************************/

include_once("google-drive-api.class.php");

$strClientId = "YOUR_CLIENT_ID";
$strClientSecret = "YOUR_CLIENT_SECRET";

// Init Drive Object
$obj = new GoogleDriveApi($strClientId, $strClientSecret);

if(empty($_GET['code'])){

  $strAuthScope = "https://www.googleapis.com/auth/drive";
  $strAuthorizetUrl = $obj->getAuthorizetUrl($strAuthScope);

	header("Location: {$strAuthorizetUrl}");
	exit;

}else{

  $strRefreshToken = $obj->getRefreshToken($_GET['code']);
  print "Refrest Token = ".$strRefreshToken;

}


?>