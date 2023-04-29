<?php

switch($vars['action']){

    

   
    case "guide_add_feedback":{
                
        
            guide_add_feedback();
    
    
            header("location: index.php?action=guide_profile");
    
            exit;
        
            }break;
        
        

   case "guide_profile":{


        $items = $db->query('SELECT * FROM guides WHERE LOWER(email) = ? AND pass = ? ' , $_COOKIE['app-email'] , $_COOKIE['app-pass'] )->fetchAll();


        //getting the guide circuits  
        $g_name = $items[0]['g_name'];
        $circuits= $db->query('SELECT title , description  FROM circuits WHERE guide=?' , $g_name )->fetchAll();


         //getting the guide feedbacks  
         $g_name = $items[0]['g_name'];
         $feedbacks= $db->query('SELECT visitor , rating , opinion   FROM feedbacks WHERE guide=?' , $g_name )->fetchAll();

        //getting the guide portfolio 
        $images= guide_get_gallery ();
        $info=guide_get_info();


        include("view/guideprofile.php");

        exit;

    }break;

    case "guide_add_circuit":{
    
        guide_add_circuit();


        echo'finished';
        header("location: index.php?action=guide_profile");

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