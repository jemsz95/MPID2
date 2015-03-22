<?php

    var_dump('hola');

    include '/tesseract/tesseract.php';

    if(!empty($_POST)) {
        //$api= new TessBaseAPI;
        //$api->Init(".","eng",$mode_or_oem=OEM_DEFAULT);
        //$api->SetPageSegMode(PSM_AUTO);

        //$image = "temp.png";
        //$image = base64_to_jpeg($_POST['image'], $image);
        //$string = ProcessPagesFileStream($image,$api);

        $ajax = 'something';

        //$result = array('string' => $string);
        //$ajax = json_encode($result);
    } else {
        $ajax = 'No files!';
    }


    echo $ajax;
?>
