<?php
function view($viewname, $data = []){
    global $action, $subAction, $config, $_page;
	  include_once "views/header.php";
          if( $action =='admin' ) {
        include 'views/admin/header.php';
    }
	if( file_exists( "views/$viewname.view.php" ) ) {
		include_once "views/$viewname.view.php";
	}
}
	