<?php

switch($vars['action']){

    

   
    case "agency_add_feedback":{
                
        
           
        $info = agency_add_feedback();

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
        
        

   case "agency_profile":{

    
    if (isset($_GET['mine'])){
      $mine=false;
    }else{
      $mine=true;
    }
    
    if (isset($_GET['name'])){


      $name = $_GET['name'];

      
      $items = $db->query('SELECT * FROM agency WHERE name =? ', $name )->fetchAll();


    }else{


      $items = $db->query('SELECT * FROM agency WHERE LOWER(email) = ? AND pass = ? ' , $_COOKIE['app_email'] , $_COOKIE['app_pass'] )->fetchAll();

      //getting the guide circuits  
      $name = $items[0]['name'];

    }

    
        $circuits2= $db->query('SELECT title , description , date  FROM circuits2 WHERE agency=?' , $name )->fetchAll();

         
         $feedbacks2= $db->query('SELECT visitor , rating , opinion   FROM feedbacks2 WHERE agency=?' , $name )->fetchAll();
         
        //getting the guide portfolio 
        $images= agency_get_gallery ($name)[0];
        $pfp= agency_get_gallery ($name)[1];
        $info=agency_get_info($name);
        

        include("view/agencyprofile.php");
        exit;

    }break;

    


    case "agency_add_circuit":{
    
        $info =agency_add_circuit();

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
    
            agency_add_image_to_gallery();

    
            exit;
        
            }break;

    case "agency_add_to_gallery":{

        $targetimage = agency_add_image_to_gallery();
        $info = agency_add_info_to_gallery();

        $db->query('UPDATE agency SET num_of_posts=num_of_posts+1 WHERE LOWER(email) = ? AND pass = ? ' , $_COOKIE['app_email'] , $_COOKIE['app_pass'] );


        
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

        case "all-agencies":{



    
            $city='Algeria';
            $items = $db->query('SELECT name , bio , gallery_path , city FROM agency ' )->fetchAll();
    
    
            include("view/agencies.php");
    
            exit;
        
            }break;
    
    
    

    
}

?>