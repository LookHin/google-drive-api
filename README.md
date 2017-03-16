# Google Drive Api

## Step by step

Step 0: Enable Google Drive API
[Enable Google Drive API](https://console.cloud.google.com/flows/enableapi?apiid=vision.googleapis.com&redirect=https://console.cloud.google.com)  

![Google Drive API](https://www.unzeen.com/github/google-drive-api/google-drive-api-01.jpg "Enable Google Drive API")

Step 1: Create OAuth client ID

![Google Drive API](https://www.unzeen.com/github/google-drive-api/google-drive-api-02.jpg "Enable Google Drive API")

![Google Drive API](https://www.unzeen.com/github/google-drive-api/google-drive-api-03.jpg "Enable Google Drive API")

Step 2: Edit Client Id and Client secret in authorize.php and example.php from this code

![Google Drive API](https://www.unzeen.com/github/google-drive-api/google-drive-api-04.jpg "Enable Google Drive API")


Step 3: Authorize (Open http://YOUR_SERVER/google-drive/authorize.php from your browser)

![Google Drive API](https://www.unzeen.com/github/google-drive-api/google-drive-api-05.jpg "Enable Google Drive API")


Step 5:  Edit refrest token in example.php from this code

![Google Drive API](https://www.unzeen.com/github/google-drive-api/google-drive-api-06.jpg "Google Drive API")

What is Folder Id or File Id
![Google Drive API](https://www.unzeen.com/github/google-drive-api/google-drive-api-07.jpg "Google Drive API")


## Example

```php
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

```

## Reference
[https://developers.google.com/identity/protocols/OAuth2WebServer](https://developers.google.com/identity/protocols/OAuth2WebServer)  
[https://developers.google.com/drive/v3/reference/files](https://developers.google.com/drive/v3/reference/files)  
[https://developers.google.com/drive/v3/web/resumable-upload](https://developers.google.com/drive/v3/web/resumable-upload)  


## About Us
Name : Khwanchai Kaewyos (LookHin)  
Email : khwanchai@gmail.com

## Website
[www.unzeen.com](https://www.unzeen.com)  
[Facebook](https://www.facebook.com/LookHin)  


## License (MIT)

Copyright (C) 2017 Khwanchai Kaewyos (LookHin)

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
