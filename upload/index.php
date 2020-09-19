<?php
if(isset($_POST['image'])){
    echo "in";
    $image = $_POST['image'];
    upload($_POST['image']);
    exit;
}
else{
    echo "image_not_in";
    exit;
}


function upload($image){
    $now = DateTime::createFromFormat('U.u', microtime(true));
    $id = "pleeease";

    $upload_folder = "/var/www/html/new/suhaib2/supload";
    $path = "$upload_folder/$id.jpg";

    if(file_put_contents($path, base64_decode($image)) != false){
        echo "uploaded_success"
    }
    else{
        echo "uploaded_failed";
    }
}

?>