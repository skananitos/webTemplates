<?php
$message = 'Attempting to upload file';

if (isset($_POST['send'])) {

    $dir = dirname(__FILE__) . DIRECTORY_SEPARATOR . '..\img\avatars';

    if (isset($_FILES['avatar']) && $_FILES['avatar']['error'] == UPLOAD_ERR_OK) {

        if (is_uploaded_file ($_FILES['avatar']['tmp_name'])) {
            $fn = basename($_FILES['avatar']['name']);
            $copyfile = $dir . DIRECTORY_SEPARATOR . $fn;

            if (move_uploaded_file($_FILES['avatar']['tmp_name'], $copyfile)) {
                $message .= "<br>Successfully uploaded file $copyfile\n";
            } else {
                $message .= "<br>Unable to upload file " . htmlspecialchars($fn);
            }
        } else{

        }
    }
}

?>