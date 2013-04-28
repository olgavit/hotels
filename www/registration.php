<?php
	session_start();

	if (isset($_POST['login'])) { 

		$login = $_POST['login']; 

		if ($login == '') { 
			unset($login);
		} 
	} 

    if (isset($_POST['pass'])) { 

    	$password=$_POST['pass']; 

    	if ($password =='') { 
    		unset($password);
    	} 
    }

	if (empty($login) or empty($password)) {

	    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }

    $login = stripslashes($login);
    $login = htmlspecialchars($login);

	$password = stripslashes($password);
    $password = htmlspecialchars($password);

    $login = trim($login);
    $password = trim($password);

    include ("connect.php"); 
 
	$result = mysql_query("SELECT * FROM users WHERE login='$login'",$db); 
    
    $myrow = mysql_fetch_array($result);

    if (empty($myrow['pass'])) {

    	exit ("Извините, введённый вами login или пароль неверный.");

    } else {
    	
	    if ($myrow['pass']==$password) {

		    $_SESSION['login']=$myrow['login']; 
		    $_SESSION['id']=$myrow['id'];
		    $_SESSION['rights']=$myrow['rights'];

	    	header ("Location: admin.php");

	    } else {

    		exit ("Извините, введённый вами пароль не введён.");
    	}
    }
?>