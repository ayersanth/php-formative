<html>
	
	<head>
		<title>User Input</title>
	</head>

	<body>
		<?php 

			$servername = "localhost";
		    $username = "root";
		    $password = "";
		    $dbname = "ayersanth";

		    $user = $_POST['username'];
			$pass = $_POST['password'];
			$str = "Hello " . $user . ", your new account has been created successfully";

		    $conn = new mysqli($servername, $username, $password, $dbname);

		    if ($conn -> connect_error) {
		        die("Connection failed: " . $conn -> connect_error);
		    }
			
			$sql = "INSERT INTO users (username, password)
			VALUES ('$user', '$pass')";

			if (mysqli_query($conn, $sql) === TRUE) {
			    echo $str;
			} else {
			    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}

			mysqli_close($conn);

		?>
	</body>

</html>