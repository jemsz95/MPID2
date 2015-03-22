<?php
    include '../php-tesseract/tesseract.php';

    $api= new TessBaseAPI;
    $api->Init(".","eng",$mode_or_oem=OEM_DEFAULT);
    $api->SetPageSegMode(PSM_AUTO);

    $image = $_FILES['image'][['tmp_name']]
    $string = ProcessPagesFileStream($image,$api);

    $result = json_encode(array('string' => $string));

    echo $result;
?>
