<?php
include("init.php");

//deleted the part that force you to login if not 

include("modules/user.php");
include("modules/guide.php");

include("modules/city.php");
include("modules/tourism.php");
include("modules/agency.php");
include("modules/hotel.php");
include("modules/restaurant.php");


//Modules to be accessed only by logged users...

include("modules/all.php");





?>


