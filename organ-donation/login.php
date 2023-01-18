<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "organ_donation";
$link = mysqli_connect($servername, $username, $password, $dbname);
$con = mysqli_select_db($link, $dbname);

if ($con) {
	echo (" ");
} else {
	die("connection failed" . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
</head>
<script type="text/javascript">
	function validate() {
		var user_id = document.getElementById("user_id");

		if (password.value.length < 8) {
			alert("Password consists of atleast 8 characters");
			password.focus();
			return false;
		}
		return true;
	}
</script>
<style type="text/css">
	body {
		font-family: sans-serif;
		background: linear-gradient(to right, #155799, #159957);
		color: whitesmoke;
	}

	h1 {
		text-align: center;
	}

	h3 {
		text-align: center;
	}

	form {
		width: 35rem;
		margin: auto;
		color: whitesmoke;
		backdrop-filter: blur(16x) saturate(100%);
		background-color: rgba(11, 15, 13, 0.582);
		border-radius: 12px;
		border: 1px solid;
	}

	input {
		width: 100%;
		margin: 10px 0;
		border-radius: 5px;
		padding: 15px 18px;
		box-sizing: border-box;
	}

	button {
		background-color: #030804;
		color: white;
		padding: 14px 20px;
		border-radius: 5px;
		margin: 7px 0;
		width: 100%;
		font-size: 18px;
	}

	.mainContainer {
		padding: 16px;
	}
</style>

<body>
	<h1>Login form </h1>
	<form id="login" action="login.php" onsubmit="return validate()" method="post" name="login">

		<div class="headingsContainer">
			<h3>Log in</h3>
			<div class="mainContainer">
				<label for="user_name">username</label>
				<input  name="user_name" type="text" placeholder="user_name"  required>
				<br><br>
				<label for="password">password</label>
				<input name="password" type="password" placeholder="password"  required>
				<br><br>
				<button name="submit" type="submit">Login</button>

			</div>
		</div>
	</form>
</body>
</body>

</html>

<?php
session_start();
if (isset($_POST['submit'])) {
	$conn = mysqli_connect("localhost", "root", "", "organ_donation");
	if (!$conn) {
		echo "<script type='text/javascript'>alert('Database failed');</script>";
		die('Could not connect: ' . mysqli_connect_error());
	}
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];
	$sql = "SELECT * FROM user WHERE user_name = '$user_name' AND password = '$password';";
	$sql_result = mysqli_query($conn, $sql) or die('request "Could not execute SQL query" ' . $sql);
	$user = mysqli_fetch_assoc($sql_result);
	if (!empty($user)) {
		$_SESSION['user_info'] = $user['user_name'];
		$message = 'Logged in successfully ';
		header('Location: home.php');
		//echo '<a href="home.php"></a>';
	} else {
		$message = 'Wrong user_name or password.';
	}
	echo "<script type='text/javascript'>alert('$message');</script>";
}
?>