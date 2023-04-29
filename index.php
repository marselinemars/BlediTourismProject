<?php
include("init.php");

//deleted the part that force you to login if not 

include("modules/user.php");
include("modules/guide.php");

include("modules/owner.php");
include("modules/city.php");

//Modules to be accessed only by logged users...

include("modules/student.php");
include("modules/owner.php");





?>


