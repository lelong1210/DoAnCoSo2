<div class="content">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
    <?php
        $arr = json_decode($data["chatModel"]->getListTN());
    ?>
    <!-- Page header start -->
    <div class="page-title">
        <div class="row gutters">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <h5 class="title">Chat App</h5>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12"> </div>
        </div>
    </div>
    <!-- Page header end -->

    <!-- Content wrapper start -->
    <div class="content-wrapper">

        <!-- Row start -->
        <div class="row gutters">

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                <div class="card m-0">

                    <!-- Row start -->
                    <div class="row no-gutters">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3">
                            <div class="users-container"  style="height: 565px;overflow:scroll">
                                <div class="chat-search-box">
                                    <div class="input-group">
                                        <!-- <input class="form-control" placeholder="Search">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-info" id="timkiemUser">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div> -->
                                        <button type="button" class="btn btn-info" id="timkiemUser">
                                                <i class="fa fa-search"></i>
                                            </button>
                                    </div>
                                </div>
                                <ul class="users" id="dsChat">
                                    <?php 
                                        if($arr){
                                            $count = count($arr);
                                            for ($i=0; $i < $count; $i++) { $arrChild = array_values((array)$arr[$i]) ?>
                                                <li class="person" data-chat="person1" id="list_chat<?php echo $arrChild[0] ?>">
                                                    <div class="user">
                                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcePiTSzFkV2JpaofezQ33zwNCZXl1r76oIT89uCbzo9UtQXn4r60m-IKg55ujn2g6XYY&usqp=CAU" alt="Retail Admin">
                                                        <!-- <span class="status busy"></span> -->
                                                    </div>
                                                    <p class="name-time">
                                                        <span class="name"><?php echo $arrChild[1]?></span>
                                                        <span class="time"><?php echo $arrChild[2]?></span>
                                                    </p>
                                                </li>
                                                <?php if($i == 0){?>
                                                    <span id="firtLi" style="display: none;"><?php echo $arrChild[0]?></span>
                                                <?php }?>
                                            <?php }?>
                                    <?php }?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-9 col-9" id="content_chat_box">
                                                    <!-- content -->
                        </div>
                    </div>
                    <!-- Row end -->
                </div>

            </div>

        </div>
        <!-- Row end -->

    </div>
    <!-- Content wrapper end -->

</div>

</div>