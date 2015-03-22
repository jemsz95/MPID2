<?php
    include '../php-tesseract/tesseract.php';

    error_reporting(-1);
    ini_set('display_errors', 'On');

    if(!empty($_FILES)) {
        $api= new TessBaseAPI;
        $api->Init(".","eng",$mode_or_oem=OEM_DEFAULT);
        $api->SetPageSegMode(PSM_AUTO);

        //$image = $_FILES['image']['tmp_name'];
        //$string = ProcessPagesFileStream($image,$api);

        $string = 'something';

        $result = json_encode(array('string' => $string));
    } else {
        $result = 'No files!';
    }


    echo $result;
?>
