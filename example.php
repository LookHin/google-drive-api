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
$strRefreshToken = "YOUR_REFRESH_TOKEN";

// Init Drive Object
$obj = new GoogleDriveApi($strClientId, $strClientSecret);
$obj->setAccessTokenFromRefreshToken($strRefreshToken);

// List File From Root Folder
$arrFile = $obj->ListFileAndFolder("root");
print_r($arrFile);

// # List File From Folder Id
//$arrFile = $obj->ListFileAndFolder("_PARENT_FOLDER_ID_");
//print_r($arrFile);

// # Create Folder In Root Folder
//$obj->CreateFolder("root", "_NEW_FOLDER_NAME_");

// # Create Folder In Parent Folder
//$obj->CreateFolder("_PARENT_FOLDER_ID_", "_NEW_FOLDER_NAME_");

// # Delete File & Folder
//$obj->Delete("_FILE_OR_FOLDER_ID_");

// # Upload File To Root Folder
// $arrResult = $obj->Upload("root", "no-face.png");
// print_r($arrResult);

// # Upload File To Parent Folder
// $arrResult = $obj->Upload("_PARENT_FOLDER_ID_", "no-face.png");
// print_r($arrResult);

?>