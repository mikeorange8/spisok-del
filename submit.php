<?php
	session_start();
	error_reporting( E_ERROR );

	$link = mysqli_connect("localhost", "root", "usbw", "sd");
	$kek = $_POST['kek'];


	$query = "SELECT value FROM date WHERE data = '".$kek[2]."'";
	if ($result = mysqli_query($link, $query)) {
						while ($row = mysqli_fetch_assoc($result)) {
							$userData = $row;
				}
			}

	if ($userData == "") {

		$query = "INSERT INTO date (value, id_user, data) VALUES ('".$kek[0]."', '".$_SESSION['user_id']."','".$kek[2]."')";
		if ($result = mysqli_query($link, $query)) {
						while ($row = mysqli_fetch_assoc($result)) {
				}
			}
			mysqli_free_result($result);		
	}
	else
	{



	$query = "UPDATE date SET value  = '".$kek[0]."' WHERE id_user = '".$kek[1]."' AND data = '".$kek[2]."'";
		if ($result = mysqli_query($link, $query)) {
						while ($row = mysqli_fetch_assoc($result)) {
				}
			}
			mysqli_free_result($result);
			//echo $kek[2];
	}
?>