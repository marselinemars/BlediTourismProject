<?php

switch($vars['action']){

    

   
    case "restaurant_add_feedback":{
                
           
        $info = restaurant_add_feedback();

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
        
        

   case "restaurant_profile":{

        if (isset($_GET['mine'])){
          $mine=false;
        }else{
          $mine=true;
        }
        
        if (isset($_GET['name'])){


          $name = $_GET['name'];

          
          $items = $db->query('SELECT * FROM resto WHERE name =? ', $name )->fetchAll();


        }else{


          $items = $db->query('SELECT * FROM resto WHERE LOWER(email) = ? AND pass = ? ' , $_COOKIE['app_email'] , $_COOKIE['app_pass'] )->fetchAll();

          //getting the guide circuits  
          $name = $items[0]['name'];

        }
         
         $feedbacks3= $db->query('SELECT visitor , rating , opinion   FROM feedbacks3 WHERE restaurant=?' , $name )->fetchAll();
         
        //getting the guide portfolio 
        $images= restaurant_get_gallery ($name)[0];
        $pfp= restaurant_get_gallery ($name)[1];
        $info=restaurant_get_info($name);
        

        include("view/restaurantProfile.php");
        exit;

    }break;

    
        
        
    
        case "add_post":{
    
            restaurant_add_image_to_gallery();

    
            exit;
        
            }break;

    case "restaurant_add_to_gallery":{

        $targetimage = restaurant_add_image_to_gallery();
        $info = restaurant_add_info_to_gallery();

        $db->query('UPDATE resto SET num_of_posts=num_of_posts+1 WHERE LOWER(email) = ? AND pass = ? ' , $_COOKIE['app_email'] , $_COOKIE['app_pass'] );


        
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
    

    case "all-restaurants":{



    
        $city='Algeria';
        $items = $db->query('SELECT name , address , gallery_path , city FROM resto ' )->fetchAll();


        include("view/restaurants.php");

        exit;
    
        }break;
    

        
    case "all-tourism":{



    
        $city='Algeria';


        include("view/tourism.php");

        exit;
    
        }break;
    
    

    
}

?>