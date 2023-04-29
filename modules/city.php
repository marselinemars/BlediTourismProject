<?php

switch($vars['action']){

    

   
    case "find_city":{

    
            $city=$_POST['city'];
            header("location: index.php?action=city_profile&city=$city");
    
            exit;
        
            }break;
        
        

   case "city_profile":{
    //normally we acess the db to get statistics !!!!



      //  $items = $db->query('SELECT * FROM guides WHERE LOWER(email) = ? AND pass = ? ' , $_COOKIE['app-email'] , $_COOKIE['app-pass'] )->fetchAll();




        include("view/cityprofile.php");

        exit;

    }break;

    case "city_guides":{

    
        $city=$_GET['city'];
        $items = $db->query('SELECT g_name , g_bio , gallery_path FROM guides WHERE g_city= ?'  , $city )->fetchAll();


        include("view/cityguides.php");

        exit;
    
        }break;
    

    case "guide_add_to_gallery":{

        $ret = guide_add_image_to_gallery();
        guide_add_info_to_gallery();

        $db->query('UPDATE guides SET num_of_posts=num_of_posts+1 WHERE LOWER(email) = ? AND pass = ? ' , $_COOKIE['app-email'] , $_COOKIE['app-pass'] );

        header("location: index.php?action=guide_profile");

        exit;
    }break;
    

    
}

?>