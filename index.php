
<?php

include("init.php");


$public_actions=array('home', 'login' , 'do_login' , 'logout' , 'sign_up' , 'hotel_do_register' , 'visitor_do_register', 'restaurant_do_register' , 'agency_do_register' , 'guide_do_register');

//non-logged user are forced to the login page...
if ($appuser==0  and !in_array($vars['action'],$public_actions)){
	$vars['action']='home';
}elseif(is_array($appuser) and !isset($vars['action'])){
    $vars['action']='home';
}



include("modules/user.php");


//Modules to be accessed only by logged users...


if (is_array($appuser)){
    
include("modules/guide.php");

include("modules/city.php");
include("modules/tourism.php");
include("modules/agency.php");
include("modules/hotel.php");
include("modules/restaurant.php");
include("modules/all.php");



}



?>



