<?php
    include '../php-tesseract/tesseract.php';

    error_reporting(-1);
    ini_set('display_errors', 'On');

    if(!empty($_FILES)) {
        //$api= new TessBaseAPI;
        //$api->Init(".","eng",$mode_or_oem=OEM_DEFAULT);
        //$api->SetPageSegMode(PSM_AUTO);

        //$image = $_FILES['image']['tmp_name'];
        //$string = ProcessPagesFileStream($image,$api);

        $string = 'something';

        $result = array('string' => $string);
        $ajax = json_encode($result);
    } else {
        $ajax = 'No files!';
    }


    echo $ajax;
?>