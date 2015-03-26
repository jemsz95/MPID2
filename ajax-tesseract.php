<?php
    require_once 'tesseract/tesseract.php';

    if(!empty($_POST)) {
        $image = base64_decode($_POST['image']);

        file_put_contents('temp.png', $image);

        $api= new TessBaseAPI;/*
        $api->Init(".","eng",$mode_or_oem=OEM_DEFAULT);
        $api->SetPageSegMode(PSM_AUTO);

        $mImgFile = "temp.png";

        $ajax = ProcessPagesFileStream($mImgFile,$api);
*/
    } else {
        $ajax = 'No files!';
    }


    echo $ajax;
?>
