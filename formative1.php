<html>
	
	<head>
		<title>User Input</title>
	</head>

	<body>
		<?php 

		    $user = $_POST['username'];
			$pass = $_POST['password'];

			$str = "Hello " . $user . ", your files have been secured successfully";

		    $conn = new mysqli($servername, $username, $password, $dbname);

		    if ($conn -> connect_error) {
		        die("Connection failed: " . $conn -> connect_error);
		    }

			if ($user === "Ant") && ($pass === "lotuswy8964") && () {
			    echo $str;
			    chmod("test.txt",0600);
			    echo $_POST["result"]
			} else {
			    echo "Error";
			}

			mysqli_close($conn);

		?>
	</body>

</html>