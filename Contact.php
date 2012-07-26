<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Naghsh Engineer Group</title>
<link type="text/css" rel="stylesheet" href="style.css" />
<script type="text/javascript" src="script.js" language="javascript"></script>
<link href="images/favicon.png" type="image/png" rel="shortcut icon" />
</head>

<body>
<div class="container1">
	<div class="header">
		<div class="menu">
			<ul>
				<li class=""><a href="index.php">صفحه اصلی</a><br /></li>
				<li class=""> <a href="#">معرفی محصولات</a><br /></li>
				<li class=""><a href="#">فروش آنلاین</a><br /></li>
				<li class=""><a href="#">درباره ما</a><br /></li>
				<li class="last"><a href="Contact.php">تماس با ما</a><br /></li>

			</ul>
		</div>
		<div class="logo"></div>
    </div>
	<div class="container">
		<div class="banner">
			<div class="scroll">
				<div class="adv1"></div>
				<div class="adv2"></div>
				<div class="adv3"></div>
				<div class="adv4"></div>
				<div class="adv5"></div>
			</div>
			<ul class="btn">
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
			</ul>
		</div>
	</div>
	<div class="content-main">
		<div class="container-contact">
			<img src="Images/Post.jpg" alt="post" />
			<div class="formstyle">
				<form action="Contact.php" method="post">
					<input type="text" name="fullName" value="نام و نام خانوادگی" />
					<input type="text" name="mail" value="ایمیل" />
					<input type="text" name="subject" value="عنوان" />
					<textarea  type="text" name="msg" >متن پیام</textarea>
					<div class="button">
						<input type="submit" name="sub" class="ok" value="" title="ارسال" />   
					</div>
				</form>
			</div>
		</div>		
		<?php
			if ( isset($_POST['fullName']) && isset($_POST['mail']) && isset($_POST['subject']) && isset($_POST['msg']) ){
				$name = $_POST['fullName'];
				$mail = $_POST['mail'];
				$subject = $_POST['subject'];
				$msg = $_POST['msg'];
				if( @mail('info@naghsh-co.ir',$subject,'Name: '.$name. "\n" .$msg,"From:info@naghsh-co.ir\nReply-To:".$mail) ){
					echo "<h1 style=\"text-align:center\;\">Your massage has been sent. Please be patient for the answer. thank you</h1>";
				}
				else{
					echo '<h1 style="text-align:center;">Your massage has not been sent. Please fill the form again. thank you!</h1>';
				}
			}
		?>


	</div>
	<div class="brands">
		<div class="article">
			<div class="left">
				<p>We sale these brands...</p>
			</div>
			<div class="right">
				<div class="main">
					<a target="_new" href="http://apple.com"><div class="apple"></div></a>
					<a target="_new" href="http://store.sony.com/webapp/wcs/stores/servlet/CategoryDisplay?catalogId=10551&storeId=10151&langId=-1&identifier=S_Notebooks&SR=nav:electronics:computers_and_tablets:laptops_dekstops:shop_compare:ss"><div class="sony"></div></a>
					<a target="_new" href="http://lenovo.com"><div class="lenovo"></div></a>
					<a target="_new" href="http://asus.com"><div class="asus"></div></a>
				</div>	
			</div>
			<div class="clear"></div>
		</div>	
	</div>
	<div class="first-bottom">
		<div class="article2">
			<div class="left">
				<img src="Images/icon_map.png" />
				<p id="title">تماس با ما</p>
				<p class="subject">آدرس</p>
				<p class="content1">
				مشهد - بلوار سجاد - مجتمع کامپیوتر رضا - واحد9
				</p>
			</div>
			<div class="middle">
				<p class="subject">ایمیل</p>
				<a class="content2" href="info@naghsh-co.ir">info@naghsh-co.ir</a>	
			</div>
			<div class="right">
				<p class="subject">تلفن و فکس</p>
				<p class="content3">
				05117677567<br />
				05117675373<br />
				05117675374<br />
				</p>
			</div>
			<p class="line1">
							  			----------------------------------------------------------------------------------------------------------------------------------------------
			</p>
			<div class="clear"></div>

		</div>	
	</div>
	<div class="copyright">
		<p class="copyright">
			Naghsh-co.ir © 2012. All rights reserved
		</p>
	</div>	
</div>
</html>