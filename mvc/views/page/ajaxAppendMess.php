<?php

use function GuzzleHttp\json_decode;

$arr = $data["arrMess"];
$arr = json_decode($arr);
if ($arr) {
    $count = count($arr);
    for ($i = 0; $i < $count; $i++) {
        $arrChild = array_values((array) $arr[$i]);
        if ($arrChild[4] == $_SESSION["username"]) { ?>
            <li class="clearfix">
                <div class="message-data text-right">
                    <span class="message-data-time"><?php echo $arrChild[3] ?></span>
                </div>
                <div class="message other-message float-right"> <?php echo $arrChild[2] ?> </div>
            </li>
        <?php } else { ?>
            <li class="clearfix">
                <div class="message-data">
                    <span class="message-data-time"><?php echo $arrChild[3] . "--" . $arrChild[5] ?></span>
                </div>
                <div class="message my-message"><?php echo $arrChild[2] ?></div>
            </li>
        <?php }
                if ($i == ($count - 1)) { ?>
            <span id="lastTime" style="display: none;"><?php echo $arrChild[3] ?></span>
        <?php } ?>
    <?php } ?>
<?php } ?>