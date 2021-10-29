<?php
class uploadModel extends connectDB
{
    function uploadImg()
    {
        /* Getting file name */
        $filename = $_FILES['file11']['name'];

        /* Location */
        $location = "./uploads/" . $filename;
        $uploadOk = 1;

        print_r($_FILES);

        if ($uploadOk == 0) {
            echo 0;
        } else {
            /* Upload file */
            if (move_uploaded_file($_FILES['file11']['tmp_name'], $location)) {
                echo 1;
            } else {
                echo 0;
            }
        }
    }
}
?>