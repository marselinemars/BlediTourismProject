
<?php

switch($vars['action']){

   
    

    case "tourism_add_to_gallery":{

       
        $ret = tourism_add_image_to_gallery();
       
        tourism_add_info_to_gallery();
        
        $db->query('UPDATE tourism SET num_of_posts=num_of_posts+1 WHERE wilaya=?  ' , $_POST['city'] );
        echo"ahla";
        
        
        header("location: index.php?action=all-tourism");

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