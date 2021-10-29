<?php
class uploadModel extends connectDB
{    protected $linktuyetdoi = "http://localhost/www/";
    function uploadImg()
    {  
        /* Getting file name */
        $filename = $_FILES['file']['name'];
        /* Location */
        $location = "./uploads/" . $filename;
        $uploadOk = 1;

        if ($uploadOk == 0) {
            echo 0;
        } else {
            /* Upload file */
            if (move_uploaded_file($_FILES['file']['tmp_name'], $location)) {
                echo $this->linktuyetdoi."uploads/".$filename;
            } else {
                echo 0;
            }
        }
    }
}
?>