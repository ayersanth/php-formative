<html>
	
	<head>
		<title>User Input</title>
	</head>

	<body>
		<?php 

		    $user = $_POST['username'];
			$text = $_POST['text'];
			$perm = $_POST['permissions'];

			// $myfile = fopen("testfile.txt", "w");
			$str = "Hello " . $user . ", your file was altered successfully";

			function changeFilePerm($fileName, $content, $chCode){

			    // $fp = fopen($fileName, 'w');
			    // fwrite($fp, $content);
			    // fclose($fp);

			    // Set perms with chmod()
			    $mod = chmod($fileName, 0 . $chCode);

			    if ($mod == true){
			    	return true;
			    } else {
			    	return false;
			    }

			}

			$write = changeFilePerm("testfile.txt", $text, $perm);

			if ($write == true) {
				echo $str;
			} else {
				echo "Process Failed";
			}
			

		?>
	</body>

</html>