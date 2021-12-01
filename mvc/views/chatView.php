<!DOCTYPE html>
<html lang="zxx">

<head>
	<?php require_once "block/head.php"; ?>
	<title>Hỏi Đáp</title>
</head>

<body>
	<!-- Header Area start  -->
	<header>
		<?php require_once "block/header.php"; ?>
		<?php require_once "block/headerMobile.php"; ?>
	</header>
	<?php
	$arr = json_decode($data["chatModel"]->getTN($_SESSION["username"] . "-tn"));
	?>
	<div class="content">
		<div class="container">
			<div class="row clearfix">
				<div class="col-lg-12">
					<div class="chat">
						<div class="chat-header clearfix">
							<div class="row">
								<div class="col-lg-12 text-center">
									<a href="#" data-toggle="modal" data-target="#view_info">
										<img src="/www/public/images/logo/logo.jpg" alt="avatar">
										<h6>Hệ Thống Bán Sản Phẩm SmartHome</h6>
										<h6>Xin Chào Quý Khách <i class="far fa-laugh-beam"></i></h6>
									</a>
									<div class="chat-about">
									</div>
								</div>
							</div>
						</div>
						<div class="chat-history" style="height:500px;overflow:scroll" id="box_chat">
							<ul class="m-b-0"  id="dstn"> 
								<?php
								if ($arr) {
									$count = count($arr);
									for ($i = 0; $i < $count; $i++) {
										$arrChild = array_values((array) $arr[$i]);
										if ($arrChild[4] == $_SESSION["username"]) { ?>
											<li class="clearfix">
												<div class="message-data text-right">
													<span class="message-data-time"><?php echo $arrChild[3]?></span>
												</div>
												<div class="message other-message float-right"> <?php echo $arrChild[2] ?> </div>
											</li>
										<?php } else { ?>
											<li class="clearfix">
												<div class="message-data">
													<span class="message-data-time"><?php echo $arrChild[3]."--".$arrChild[5]?></span>
												</div>
												<div class="message my-message"><?php echo $arrChild[2] ?></div>
											</li>
										<?php } 
										if($i == ($count-1)){?>
											<span id="lastTime" style="display: none;"><?php echo $arrChild[3]?></span>
										<?php }?>
									<?php } ?>
								<?php }else {?>
									<span id="lastTime" style="display: none;"></span>
								<?php }?>
							</ul>
						</div>
						<div class="chat-message clearfix">
							<div class="input-group mb-0">
								<input type="text" class="form-control" placeholder="Nhập Tin Nhắn..." id="ndTN">
								<button class="btn btn-success" id="gui">Gửi</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Area Start -->
	<?php require_once "block/footer.php"; ?>
	<!-- Footer Area End -->

	<?php require_once "block/jslink.php"; ?>

</body>

</html>