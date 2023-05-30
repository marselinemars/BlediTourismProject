<?php

switch($vars['action']){

  
    case "my_profile":{


            $role=$_GET['role'];
            

            switch ($role ){

                case "guide" : {

                    header("location: index.php?action=guide_profile");
                    break;
                }
                case "hotel" : {

                    header("location: index.php?action=hotel_profile");
                    break;
                }
                case "resto" : {

                    header("location: index.php?action=restaurant_profile");
                    break;
                }
                case "agency" : {

                    header("location: index.php?action=agency_profile");
                    break;
                }
            }
            
            exit;
        
            }break;
        
    

    
}

?>