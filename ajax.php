<?php
	error_reporting( E_ERROR );

	$qwe = $_POST['personal_set'];
	$userDat = 'Ничего нет';
	$link = mysqli_connect("localhost", "root", "usbw", "sd");
	$query = "SELECT value FROM date WHERE id_user = '".$qwe[1]."' AND data = '".$qwe[0]."'";
		if ($result = mysqli_query($link, $query)) {
						while ($row = mysqli_fetch_assoc($result)) {
							$userData = $row;
							$userDat = $userData['value'];
				}
			}
			mysqli_free_result($result);
	
	echo $userDat;
?>