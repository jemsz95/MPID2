<?php
    include 'tesseract/tesseract.php';

    $api= new TessBaseAPI;
    $api->Init(".","eng",$mode_or_oem=OEM_DEFAULT);
    $api->SetPageSegMode(PSM_AUTO);

    $image = "./image.png";

    $string = ProcessPagesFileStream($image,$api);

    echo $string;
?>
