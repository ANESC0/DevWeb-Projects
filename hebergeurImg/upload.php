<?php


if(isset($_FILES['image']) && $_FILES['image']['error'] === 0) {


    if($_FILES['image']['size'] <= 3000000) {

        $informationsImage = pathinfo($_FILES['image']['name']);
        $extensionImage    = $informationsImage['extension'];
        $extensionsArray   = ['png', 'gif', 'jpg', 'jpeg'];

        if(in_array($extensionImage, $extensionsArray)) {

            
            $newImageName = time().rand().rand().'.'.$extensionImage;
            move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/'.$newImageName);
            $send = true;

        }
    }
}
?>