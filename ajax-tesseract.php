<?php
    include '/tesseract/tesseract.php';

    function base64_to_jpeg($base64_string, $output_file) {
    $ifp = fopen($output_file, "wb");

    $data = explode(',', $base64_string);

    fwrite($ifp, base64_decode($data[1]));
    fclose($ifp);

    return $output_file;
    }

    if(!empty($_POST)) {
        $api= new TessBaseAPI;
        $api->Init(".","eng",$mode_or_oem=OEM_DEFAULT);
        $api->SetPageSegMode(PSM_AUTO);

        $image = "temp.png";
        $image = base64_to_jpeg($_POST['image'], $image);
        $string = ProcessPagesFileStream($image,$api);

        $string = 'something';

        $result = array('string' => $string);
        $ajax = json_encode($result);
    } else {
        $ajax = 'No files!';
    }


    echo $ajax;
?>
