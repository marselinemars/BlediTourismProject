<?php

function get_input_vars(){
    global $_SERVER;
    $REQUEST_METHOD = $_SERVER['REQUEST_METHOD'];
    global $_POST;
    global $_GET;
    //set_magic_quotes_runtime (0);

    $vars = $_POST ;
    foreach ($vars as $k=>$v){
        if (is_array($v)) continue;
        //if (get_magic_quotes_gpc())
	$v = stripslashes($v);
        $vars[$k] = trim($v);
    }

    $vars2 = $_GET ;
    foreach ($vars2 as $k=>$v){
        if (is_array($v)) continue;
        //if (get_magic_quotes_gpc()) 
	$v = stripslashes($v);
        $vars[$k] = trim($v);
    }

    return $vars;
}

?>