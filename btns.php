<?php

	if (isset($_POST['logbtn']))
	{
		$link = mysqli_connect("localhost", "root", "usbw", "sd");
		$login = mysqli_real_escape_string($link, $_POST['login']);
		$pass = mysqli_real_escape_string($link, $_POST['pass']);
		$query = "SELECT id FROM users WHERE login = '".$login."' AND password = '".$pass."'";
		$_SESSION['user_id'] = '';
		if($result = mysqli_query($link, "SELECT id FROM users WHERE
			login = '".$login."' AND password = '".$pass."'"))
			{
				while ($row = mysqli_fetch_assoc($result)) {
					$_SESSION['user_id']=$row['id'];
					$_SESSION['login']=$login;
				}
				mysqli_free_result($result);
			}
            mysqli_close($link);
            header('Location: index.php');
	}
