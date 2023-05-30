<?php

switch($vars['action']){

    

   
    case "guide_add_feedback":{
                
        
        $info = guide_add_feedback();

        $response = array(
            $info,
            'html' =>  '<div class="feedback-card">
          
            <div class="rating">
              <div class="stars">
                '.$info['stars'].'
              </div>
            </div>
            <div class="feedback-details">
              <p class="author">'.$info['name'].'</p>
              <p class="comment">'.$info['description'].'</p>
            </div>
  
          </div>',
        );
    

        
        // Prepare the JSON response
        $jsonResponse = json_encode($response);

        // Set the response headers
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *'); // Adjust the allowed origins as needed

        // Send the JSON response
        echo $jsonResponse;
            exit;
        
            }break;
        
        

   case "guide_profile":{

    if (isset($_GET['mine'])){
      $mine=false;
    }else{
      $mine=true;
    }
    
    if (isset($_GET['name'])){


      $g_name = $_GET['name'];

      
      $items = $db->query('SELECT * FROM guides WHERE g_name =? ', $g_name )->fetchAll();


    }else{


      $items = $db->query('SELECT * FROM guides WHERE LOWER(email) = ? AND pass = ? ' , $_COOKIE['app_email'] , $_COOKIE['app_pass'] )->fetchAll();

      //getting the guide circuits  
      $g_name = $items[0]['g_name'];

    }

   


        $circuits= $db->query('SELECT title , description , date  FROM circuits WHERE guide=?' , $g_name )->fetchAll();

         $feedbacks= $db->query('SELECT visitor , rating , opinion   FROM feedbacks WHERE guide=?' , $g_name )->fetchAll();
         
        //getting the guide portfolio 
        $images= guide_get_gallery ($g_name)[0];
        $pfp= guide_get_gallery ($g_name)[1];
        $info=guide_get_info($g_name);
        

        include("view/guideprofile.php");
        exit;

    }break;

    case "guide_add_circuit":{
    
        $info =guide_add_circuit();

        $response = array(
            $info,
            'html' =>  '<div class="circuit-card">
            <h2 class="circuit-title">'.$info['title'].':</h2>
            <p class="circuit-description">'.$info['description'].' </p>
            <p class="circuit-date">'.$info['date'].'</p>
          </div>',
        );
        
        // Prepare the JSON response
        $jsonResponse = json_encode($response);

        // Set the response headers
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *'); // Adjust the allowed origins as needed

        // Send the JSON response
        echo $jsonResponse;
        exit;
    
        }break;
    
        case "add_post":{
    
            guide_add_image_to_gallery();

    
            exit;
        
            }break;

    case "guide_add_to_gallery":{

        $targetimage = guide_add_image_to_gallery();
        $info = guide_add_info_to_gallery();

        $db->query('UPDATE guides SET num_of_posts=num_of_posts+1 WHERE LOWER(email) = ? AND pass = ? ' , $_COOKIE['app_email'] , $_COOKIE['app_pass'] );


        
        $response = array(
            $info,$targetimage,
            'html' => '<div  class="guideprofie-gallery-card mycard"><img style="height:60%;"class="mycard"alt="image"src="' . $targetimage . '"class="guideprofie-image2"/><div class="info" style="height:40%; width:100%; padding:2%;"><h2 class="guideprofie-text06 mycard">'.$info['title'].'</h2><p style="word-wrap: break-word;" class="guideprofie-text07 mycard">'.$info['description'].'</p></div></div>',
        );
        
        // Prepare the JSON response
        $jsonResponse = json_encode($response);

        // Set the response headers
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *'); // Adjust the allowed origins as needed

        // Send the JSON response
        echo $jsonResponse;

        exit;
    }break;
    

    case "all-guides":{



    
        $city='Algeria';
        $items = $db->query('SELECT g_name , g_bio , gallery_path , g_city FROM guides ' )->fetchAll();


        include("view/cityguides.php");

        exit;
    
        }break;
    


    
}

?>