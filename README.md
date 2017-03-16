# Google Drive Api

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
## Test
Test Test

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
