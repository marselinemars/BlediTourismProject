<?php

switch($vars['action']){

    

    case "city_hotels":{

    
        $city=$_GET['city'];
        $items = $db->query('SELECT name , address , gallery_path FROM hotel WHERE city= ?'  , $city )->fetchAll();


        include("view/cityhotels.php");

        exit;
    
        }break;
        
   
    case "find_city":{


            $city=$vars['city'];
            header("location: index.php?action=city_profile&city=$city");
            
            exit;
        
            }break;
        
        


   case "city_profile":{
    //normally we acess the db to get statistics !!!!


    $city = $_GET['city'];

      $guide_count = $db->query('SELECT COUNT(*) AS count FROM guides WHERE g_city = ? ' , $city )->fetchAll()[0]['count'];
      $tourism_count = $db->query('SELECT COUNT(*) AS count FROM tourism WHERE wilaya = ? ' , $city )->fetchAll()[0]['count'];
      $resto_count = $db->query('SELECT COUNT(*) AS count FROM resto WHERE city = ? ' , $city )->fetchAll()[0]['count'];
      $agency_count = $db->query('SELECT COUNT(*) AS count FROM agency WHERE city = ? ' , $city )->fetchAll()[0]['count'];
      $hotel_count = $db->query('SELECT COUNT(*) AS count FROM hotel WHERE city = ? ' , $city )->fetchAll()[0]['count'];

      include("view/cityprofile.php");

        exit;

    }break;

    case "city_guides":{

    
        $city=$_GET['city'];
        $items = $db->query('SELECT g_name , g_bio , gallery_path FROM guides WHERE g_city= ?'  , $city )->fetchAll();


        include("view/cityguides.php");

        exit;
    
        }break;


        case "city_agencies":{

    
            $city=$_GET['city'];
            $items = $db->query('SELECT name , bio , gallery_path , city  FROM agency WHERE city= ?'  , $city )->fetchAll();
    
    
            include("view/agencies.php");
    
            exit;
        
            }break;

            case "city_restaurants":{

    
                $city=$_GET['city'];
                $items = $db->query('SELECT r_name , r_bio , gallery_path FROM restaurants WHERE r_city= ?'  , $city )->fetchAll();
        
        
                include("view/restaurants.php");
        
                exit;
            
                }break;
    
    

    
}

?>