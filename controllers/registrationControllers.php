<?php
if( $action=='registration'){
	if(!empty($_POST)){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		if( $name != '' && $email != ''  && $password!= '' ) {
			$userCheck = sql( $db, "SELECT * FROM `users` WHERE ` `email` = '$email' ", [], 'rows' );
			echo 'Реєстрація пройшла вдало';
			if (empty($userCheck)){
				insertUser($db, $name, $email, $password);
			}
if(empty($name))
	{
		echo "Вdедите имя";
		exit ();
	}

	
 if ( empty($password)){
 	echo "ВВедите пароль";
 	exit ();
 } 


 if ( !filter_var($email, FILTER_VALIDATE_EMAIL)) {
 		echo "Неправильно введён емейл";
 }


			
			// else {
			// 	echo "такий логін або email вже існує";
			// }
		}
	}
	view('registration');
}



























//  <?php
// if( $action=='registration'){
// 	if(!empty($_POST)){
// 		$name = $_POST['name'];
// 		$email = $_POST['email'];
// 		$login = $_POST['login'];
// 		$password = $_POST['password'];
// 		if( $name != '' && $email != '' && $login != '' && $password!= '' ) 

// {
		
// 			$userCheck = sql( $db, "SELECT * FROM `users` WHERE `login` = '$login' OR `email` = '$email'  OR `password` = 'SHA1($password)'", [], 'rows' );
			
// 			if (empty($userCheck)){
// 				insertUser($db, $name, $email, $password,  $login);
// 			}
// 			else {
// 				echo "такий логін або email вже існує";
// 			}
// 			if(empty($name))
// 	{
// 		echo "Вdедите имя";
// 		exit ();
// 	}
	
// if(empty($login)) {
// 		echo "ВВедите логин";
// 		exit ();
// 	}
	
//  if ( empty($password)){
//  	echo "ВВедите пароль";
//  	exit ();
//  } 


//  if ( !filter_var($email, FILTER_VALIDATE_EMAIL)) {
//  		echo "Неправильно введён емейл";
//  }
// 		}
// 	}
// 		view('registration');
// }