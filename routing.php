<?php
$routs=[
'account',
'registration',
'login',
'logout'
];
$action = null;
$subAction = null;
$idRout = null;
if( $_SERVER['REQUEST_URI'] != '/' ) {
    $url =  parse_url($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);
    $urlArray = explode('/',$url['path']);
    
    $urlArray = array_filter($urlArray);

    
    $action = $urlArray[1];
    if( isset($urlArray[2]) ) {
        if(is_numeric($urlArray[2])){
            $idRout = $urlArray[2];
        }
        else $subAction = $urlArray[2];
    }
    if( !in_array( $action, $routs ) ) {
        $action = null;
        $subAction = null;
    }
if( $action == 'admin' ) {
        $method = $_GET['method'] ?? null;
        $_page = $_GET['page'] ?? 0;
    }

}


else {
    $action = 'main';
}