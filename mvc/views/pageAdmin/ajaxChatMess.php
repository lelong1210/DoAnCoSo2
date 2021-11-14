<?php 
    $arr = json_decode($data["arrContentMess"]);
    $arrUserName = json_decode($data["arrUserName"]); 
    $arrUserName = array_values((array)$arrUserName[0]);
    $arrUserName = $arrUserName[0];

?>
<div class="selected-user">
    <span>Tới: <span class="name"><?php echo $arrUserName;?></span></span>
</div>
<div class="chat-container ">
    <div class="box-chat-content" style="height:430px;overflow:scroll;">
        <ul class="chat-box chatContainerScroll" id="ul_chat_box">
            <?php 
                if($arr){ 
                    $count = count($arr);
                    for ($i=0; $i < $count; $i++) { 
                        $arrChild = array_values((array)$arr[$i]);
                        if($arrChild[4] == $_SESSION["username"]){?>
                            <li class="chat-right">
                                <div class="chat-hour"><?php echo $arrChild[3]?></div>
                                <div class="chat-text"><?php echo $arrChild[2]?></div>
                                <div class="chat-avatar">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcePiTSzFkV2JpaofezQ33zwNCZXl1r76oIT89uCbzo9UtQXn4r60m-IKg55ujn2g6XYY&usqp=CAU" alt="Retail Admin">
                                    <div class="chat-name"><?php echo $arrChild[5]?></div>
                                </div>
                            </li> 
                    <?php }else{?>
                        <li class="chat-left">
                            <div class="chat-avatar">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcePiTSzFkV2JpaofezQ33zwNCZXl1r76oIT89uCbzo9UtQXn4r60m-IKg55ujn2g6XYY&usqp=CAU" alt="Retail Admin">
                                <div class="chat-name"><?php echo $arrChild[5]?></div>
                            </div>
                            <div class="chat-text"><?php echo $arrChild[2]?></div>
                            <div class="chat-hour"><?php echo $arrChild[3]?></div>
                        </li>
                    <?php }
                        if($i == $count-1){?>
                            <span id="lastTime" style="display: none;"><?php echo $arrChild[3]?></span>
                            <span id="matinnhan" style="display: none;"><?php echo $arrChild[1]?></span>
                    <?php }?>
                 <?php }?>

            <?php }?>
        </ul>
    </div>
    <div class="form-group mt-3 mb-0 text-center row">
        <input type="text" class="form-control col-sm-10" rows="3" id="ndSend" placeholder="Nhập Tin Nhắn..."></input>
        <button class="col-sm-2 btn btn-success" id="btnSend<?php echo $arrChild[1]?>">Gửi</button>
    </div>
</div>