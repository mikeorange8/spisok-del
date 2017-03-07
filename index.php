<?php
	session_start();
	error_reporting( E_ERROR );
	//session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DayKekler</title>
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">

<style type="text/css">
	body{
		background-image: url(assets/bg3.png);
	}
</style>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>



</head>
<body>
<script type="text/javascript">
	$.datepicker.setDefaults({
    dateFormat: 'yy-mm-dd'
});
</script>
<?php
if (isset($_POST['submit'])) 
	{
		$value = htmlspecialchars(strip_tags($_POST['value']));
		$link = mysqli_connect("localhost", "root", "usbw", "sd");
		$query = "UPDATE date SET value='".mysqli_real_escape_string($link,$value)."' WHERE id=".$_SESSION['user_id']."AND data=" ;
		if ($result = mysqli_query($link, $query)) {
						while ($row = mysqli_fetch_assoc($result)) {
							$userData = $row;
				}
			}
			mysqli_free_result($result);
	}
	if ($_SESSION['user_id']=='') {
?>
	<div class = "enter">
	  <ul id = "lst" class="collapsible" data-collapsible="accordion">
	  <li>
	    <div id = "lgnbtn" class="collapsible-header"><i class="material-icons">lock_open</i>Вход</div>
	      <div id = "cb" class="collapsible-body">
	      	<form method="post" action="btns.php">
	      		<div class="row">
	        		<div class="input-field col s12">
	          			<input id="email" type = "text" class="validate" name = "login">
	          			<label for="email">Логин</label>
	        		</div>
	      		</div>		

	      		<div class="row">
	        		<div class="input-field col s12">
	          			<input id="password" type="password" class="validate" name="pass">
	          			<label for="password">Пароль</label>
	        		</div>
	      		</div>
	      		<button id = "lb" class="btn waves-effect waves-light" type="submit" name="logbtn">Войти</button>
	      	</form>
	      </div>
	    </li>
	    <li>
	      <div id = "regbtn" class="collapsible-header"><i class="material-icons">assignment_ind</i>Регистрация</div>
	      <div id = "cb" class="collapsible-body">
	      		<form method="post" action="" accept-charset="UTF-8">
	      			<div class="row">
	        		<div class="input-field col s12">
	          			<input name = "login" id="login" type = "text" class="validate">
	          			<label for="email">Логин</label>
	        		</div>
	      		</div>		
	      		<div class="row">
	        		<div class="input-field col s12">
	          			<input name= "email" id="email" type="email" class="validate">
	          			<label for="email" data-error="Введите email." data-success="right">Email</label>
	        		</div>
	      		</div>
	      		<div class="row">
	        		<div class="input-field col s12">
	          			<input name="pass" id="password" type="password" class="validate">
	          			<label for="password">Пароль</label>
	        		</div>
	      		</div>
	      		<button id = "lb" class="btn waves-effect waves-light" type="submit" name="regbtn">Зарегистрироваться<i class="material-icons right">send</i></button>	
	      		</form>
	      </div>
	    </li>
	  </ul>
	</div>
<?php
}
	else
	{
?>

<p id = "ids" style="display:none"><?php echo $_SESSION['user_id']?></p>
<p id = "dts" style="display:none"></p>

	<div class="container">
	<div class="row">

	          <input id="datepicker" onclick= "fh()" type="text" class="date" Placeholder="Выберите дату">
	</div>
	<div class="row">
	        <div class="row">
	          <div class="input-field col s12">
	            <textarea id="textarea1" class="materialize-textarea" name = "value" length="3000" Placeholder="Сначала выберите дату."></textarea>
	            <label for="textarea1">Ваш список дел</label>
	          </div>
	        </div>
	        <button class="btn waves-effect waves-light" onclick = "sumbit()" id="lgoutbtn" name="submit">Submit
    <i class="material-icons right">send</i>
  	</button>
	    </div>
	</div>

	<div class = "profile">

		<form action="" method="post">
			<ul id="lst" class="collapsible" data-collapsible="expandable">
			<li>
      		<div id="profbtn" class="collapsible-header"><i class="material-icons">perm_identity</i>Логин</div>
      		<div id= "cb" class="collapsible-body">
      				<div class="row">
	        		    <div class="input-field col s12">
	          					<input id="login" type="text" class="validate" Placeholder= "Новый логин" name="login">
	        		    </div>
	      		    </div>
      		</div>
    		</li>
	    	<li>
	      		<div id="profbtn" class="collapsible-header"><i class="material-icons">vpn_key</i>Пароль</div>
	      		<div id= "cb" class="collapsible-body">
							<div class="row">
		        		    <div class="input-field col s12">
		          					<input id="password" type="password" class="validate" Placeholder= "Новый пароль" name="pass">
		        		    </div>
		      		    </div>
	      		</div>
	    	</li>
	    	<li>
	      		<div id="profbtn" class="collapsible-header"><i class="material-icons">email</i>Емейл</div>
	      		<div id= "cb" class="collapsible-body">
	      		<div class="row">
		        		    <div class="input-field col s12">
		          					<input id="email" type="email" class="validate" Placeholder= "Новый email" name="email">
		        		    </div>
		      		    </div>
	    	</li>
	    	</ul>
    		<button id = "eb" class="btn waves-effect waves-light" type="submit" name="editbtn">Изменить</button>
		</form>
	</div>

	
<?php
}


	if (isset($_POST['lgoutbtn'])) 
	{
		session_destroy();
		header('Location: index.php');
	}

	if (isset($_POST['regbtn']))
	{
		session_destroy();
		$login=htmlspecialchars(strip_tags($_POST['login']));
		$pass=htmlspecialchars(strip_tags($_POST['pass']));
		$email=htmlspecialchars(strip_tags($_POST['email']));
		$link = mysqli_connect("localhost", "root", "usbw", "sd");
		$query="INSERT INTO users (login, password, email) VALUES ('".mysqli_real_escape_string($link,$login)."', '".mysqli_real_escape_string($link,$pass)."','".mysqli_real_escape_string($link,$email)."')";
		 if ($result = mysqli_query($link, $query, MYSQLI_USE_RESULT)) {

         	if (!mysqli_query($link, "SET @a:='this will not work'")) {
             	printf("Ошибка: %s\n", mysqli_error($link));
         	}
    		mysqli_free_result($result);
    	}
    	mysqli_close($link);
	}

	if (isset($_POST['editbtn']))
	{
		$login=htmlspecialchars(strip_tags($_POST['login']));
		$pass=htmlspecialchars(strip_tags($_POST['pass']));
		$email=htmlspecialchars(strip_tags($_POST['email']));
		$link = mysqli_connect("localhost", "root", "usbw", "sd");

		if ($email != "") {
			$query = "UPDATE users SET email='".mysqli_real_escape_string($link,$email)."' WHERE id=".$_SESSION['user_id'];
			if ($result = mysqli_query($link, $query)) {
							while ($row = mysqli_fetch_assoc($result)) {
								$userData = $row;
					}
				}
				mysqli_free_result($result);
		}
		if($login != ""){			
		$query = "UPDATE users SET login='".mysqli_real_escape_string($link,$login)."' WHERE id=".$_SESSION['user_id'];
		if ($result = mysqli_query($link, $query)) {
						while ($row = mysqli_fetch_assoc($result)) {
							$userData = $row;
				}
			}
			mysqli_free_result($result);
			$_SESSION['login'] = $login;
		}


		if($pass != ""){			
		$query = "UPDATE users SET password='".mysqli_real_escape_string($link,$pass)."' WHERE id=".$_SESSION['user_id'];
		if ($result = mysqli_query($link, $query)) {
						while ($row = mysqli_fetch_assoc($result)) {
							$userData = $row;
				}
			}
			mysqli_free_result($result);
		}

	}

		if ($_SESSION['user_id']!='') {
    ?>   
	<nav>
	    <div class="nav-wrapper">
	      <a href="" id = "logo" class="brand-logo"><img src="assets/asd.ico" width="65" height = "63"></a>
	      <span style="padding-left:100px; "><?php echo "Вы вошли как <b>".$_SESSION['login']."</b> ";?></span>
	      <ul id="nav-mobile" class="right hide-on-med-and-down">
	        <li><button id = "profilebtn" class="btn waves-effect waves-light" type="submit" name="">Профиль</button></li>
	        <li><button id = "mainbtn" class="btn waves-effect waves-light" type="submit" name="">Список дел</button></li>
	        <li><form action="" method="post"><button id = "lgoutbtn" class="btn waves-effect waves-light" type="submit" name="lgoutbtn">Выйти</button></form></li>
	      </ul>
	    </div>
  	</nav>
	<?php
  }
  	?>




<script src="js/materialize.min.js"></script>
<script type="text/javascript">
	$("#mainbtn").on("click",function(){
		$(".container").fadeIn("slow");
		$(".profile").fadeOut("slow");
	})
</script>
<script type="text/javascript">
	$("#profilebtn").on("click",function(){
		$(".profile").fadeIn("slow");
		$(".container").fadeOut("slow");
	})
</script> 



<script type="text/javascript">
	
	$(".date").datepicker({
  onSelect: function(dateText) {
  	document.getElementById("dts").innerHTML = dateText;
  	qwe(dateText);
  }	
});
</script>


<script type="text/javascript">
	function qwe(idq)
	{
		var ss = document.getElementById("ids").innerHTML;
		var personal_set = [idq,ss];
		$.ajax({
			type: 'post',
			data: {personal_set: personal_set},
			url: 'ajax.php?',
			dataType: 'text'
		}).done(function (data)
		{
		    $(".materialize-textarea").trigger("autoresize");
			$("#textarea1").val(data);
		}).fail(function()
		{
			alert("fail");
		});		
	}

	function sumbit()
	{
		Materialize.toast('Данные обновлены!', 4000);
		var ss = document.getElementById("ids").innerHTML;
		var sss = document.getElementById("dts").innerHTML;
		var kek = [document.getElementById("textarea1").value,ss,sss ];
		if ((document.getElementById("textarea1").value != "") && (dts != "0000-00-00")) {
			$.ajax({
			type: 'post',
			data: {kek:kek},
			url: 'submit.php',
			dataType: 'text'
			}).done(function (data)
			{

		}).fail(function()
		{
			alert("fail");
		});		
		   	 $(".materialize-textarea").trigger("autoresize");

		}
		
	}



</script>













</body>
</html>