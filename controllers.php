<?php
if ($action == null){
  
    include "views/404.view.php";
}

include "controllers/loginController.php";

include "controllers/registrationControllers.php";

include "controllers/logoutController.php";

include "controllers/accountController.php";


// if( isset( $_SESSION['user'] ) && $_SESSION['user_role'] == 'admin' )  {
//  $method = $_GET['method'] ?? null;
//  // echo "123";
// // include 'views/admin/headerView.php';

// if ($subAction!=null){
// $controllerFileName = 'controllers/admin/' . $subAction . 'Controller.php';


//                 include_once $controllerFileName;
//             }
//  else {
//                 view('admin/main');
//             }


// }
// else {
//           view('header.php');        

        // }
//     }
// }