
<?php

switch($vars['action']){

   
    

    case "tourism_add_to_gallery":{

        
        $ret = tourism_add_image_to_gallery();
        
        
        tourism_add_info_to_gallery();
        
        $db->query('UPDATE tourism SET num_of_posts=num_of_posts+1 WHERE wilaya=?  ' , $_POST['city'] );
        
        
        
        header("location: index.php?action=all-tourism");

        exit;
    }break;
    case "tourism_add_to_gallery2":{
     
       
        
        $image= tourism_add_image_to_gallery();
       
        $info=tourism_add_info_to_gallery();
        
        $db->query('UPDATE tourism SET num_of_posts=num_of_posts+1 WHERE wilaya=?  ' , $_POST['city'] );
        
        $response = array(
            $info,$image,
            'html' => '<div class="place-card">
            <div class="place-photo">
              <img src='.$image.' alt="annaba my love">
            </div>
            <div class="place-details">
              <h3 class="place-title">'.$info['city'].' : '.$info['title'].'</h3>
             
        <p class="place-description">'.$info['description'].'</p>
              <p class="place-open-time">Open Time: '.$info['time'].'</p>
            </div>
            <button class="show-location-button" onclick="showLocation(\''.$info['latitude'].'\', \''.$info['longitude'].'\')">Show Location</button>

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
    

    case "all-tourism":{


        $city='Algeria';
        $items = $db->query('SELECT  Gallery_path , num_of_posts ,wilaya FROM tourism ' )->fetchAll();

        

       
        
        include("view/tourism.php");

        exit;
    
        }break;


        
        case "city_tourism":{

           
            $city = $_GET['city'];
            $items = $db->query('SELECT  Gallery_path , num_of_posts FROM tourism  WHERE wilaya=?', $city  )->fetchAll();
            $images=tourism_get_gallery($city);
            $info=tourism_get_info($city);
           
            
            include("view/tourism_wilaya.php");
    
            exit;
        
            }break;    
    
    

    
}

?>