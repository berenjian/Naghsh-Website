		<?php
			if ( isset($_POST['name']) && isset($_POST['Brands']) && isset($_POST['model']) && isset($_POST['tel']) && isset($_POST['mail']) && isset($_POST['address']) && isset($_POST['pay']) && isset($_POST['sub'])  ){
				$name = $_POST['name'];
				$brands = $_POST['Brands'];
				$model = $_POST['model'];
				$tel = $_POST['tel'];
				$mail = $_POST['mail'];
				$address = $_POST['address'];
				$pay = $_POST['pay'];
				$sub = $_POST['sub'];
				if( @mail('info@naghsh-co.ir',$subject,'Name: '.$name. "\n" .$msg,"From:info@naghsh-co.ir\nReply-To:".$mail) ){
					echo "<h1 style=\"text-align:center\;\">Your massage has been sent. Please be patient for the answer. thank you</h1>";
				}
				else{
					echo '<h1 style="text-align:center;">Your massage has not been sent. Please fill the form again. thank you!</h1>';
				}
			}
		?>