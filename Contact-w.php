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