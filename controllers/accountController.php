<?php
if( $action == 'account'){
	if(!empty($_SESSION['user'])){
		
// 
		$userId=$_SESSION['user'];
	//accounts
		$accounts = sql( $db,  'SELECT t.uniq_id, t.description FROM `accounts` t INNER JOIN users_accounts a ON a.account_id = t.id INNER JOIN users u ON u.id = a.user_id WHERE u.id = '.$userId, [], 'rows');

	// var_dump($accounts);
	// echo "<br>";

		
	//balanse

		$balanse= sql( $db, 'SELECT SUM(t.price) as ballanse FROM `transactions` t 
			INNER JOIN users_accounts a ON a.account_id = t.account_id
			INNER JOIN users u ON u.id = a.user_id
			WHERE u.id = '.$userId, [], 'rows');

// var_dump($balanse[0]);
// echo "<br>";



		$description= sql ($db, 'SELECT * FROM `transactions` t INNER JOIN users_accounts a ON a.account_id = t.account_id INNER JOIN accounts s ON s.id = t.account_id INNER JOIN categories b ON b.id = t.category_id INNER JOIN users u ON u.id = a.user_id WHERE u.id ='.$userId, [], 'rows');



		// var_dump ($description);


		if(!empty($_POST)){
			$uniq_id=uniqid();
			$description = $_POST['description'];
			$insertAcount = $db->prepare("INSERT INTO accounts(`uniq_id`, `description`) VALUES (?, ?)");
			$insertAcount->execute(array($uniq_id, $description));


		}


		$Category = sql( $db, 'SELECT * FROM `categories`', [], 'rows' );
    // $res=  $Category[0];
    // return  $Category;

		// var_dump ($Category);


		$sort=  sql( $db, 'SELECT * FROM `transactions`  ORDER BY created_at', [], 'rows' );


		// var_dump ($sort);





		view('account', ['balanse'=>$balanse[0]['ballanse'],'accounts'=>$accounts,'description'=>$description,  'Category'=>$Category ]);
	}






	else {
		echo "Зареструйтесь будь ласка";
		view('registration');
	}}























// if(!empty($_POST)){
// 	$uniq_id=uniqid();
// $description = $_POST['description'];
// $insertAcount = $db->prepare("INSERT INTO accounts(`uniq_id`, `description`) VALUES (?, ?)");
//     $insertAcount->execute(array($uniq_id, $description));
// }


// function getCategories( $db ) {
//     $Category = sql( $db, 'SELECT * FROM `categories`', [], 'rows' );
//     // return  $Category;
//     var_dump ($Category);
// }






// var_dump( $accounts1);
	
	
	
	// return $reviewId;



	// 	'SELECT * FROM `reviews` WHERE `id` = '.$idRout, [], 'rows' );
	// return $reviewId;
	// 'SELECT t.uniq_id, t.description FROM `accounts` t INNER JOIN users_accounts a ON a.account_id = t.id INNER JOIN users u ON u.id = a.user_id WHERE u.id = 1'













