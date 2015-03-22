<?php
    include 'tesseract/tesseract.php';

    if(!empty($_POST)) {
        //$api= new TessBaseAPI;
        //$api->Init(".","eng",$mode_or_oem=OEM_DEFAULT);
        //$api->SetPageSegMode(PSM_AUTO);

        //var_dump($_POST['image']);

        $image = base64_decode ($_POST['image']);

        var_dump(error_get_last());

        //$string = ProcessPagesFileStream($image,$api);

        $ajax = 'something';

        //$result = array('string' => $string);
        //$ajax = json_encode($result);
    } else {
        $ajax = 'No files!';
    }


    echo $ajax;
?>
