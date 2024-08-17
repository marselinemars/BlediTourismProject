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


            case "delete_post":{

                
                echo "i am here ";


                $image=$_GET['image'];
                $info=$_GET['text'];
                
    
                unlink($image);
                unlink($info);
                
                switch ($role ){

                    case "guide" : {
    
                        $db->query('UPDATE guides SET num_of_posts=num_of_posts-1 WHERE LOWER(email) = ? AND pass = ? ' , $_COOKIE['app_email'] , $_COOKIE['app_pass'] );
                        header("location:index.php?action=guide_profile");

                        break;
                    }
                    case "hotel" : {
    
                        $db->query('UPDATE hotel SET num_of_posts=num_of_posts-1 WHERE LOWER(email) = ? AND pass = ? ' , $_COOKIE['app_email'] , $_COOKIE['app_pass'] );
                        header("location:index.php?action=hotel_profile");                       
                         break;
                    }
                    case "resto" : {
    
                        $db->query('UPDATE resto SET num_of_posts=num_of_posts-1 WHERE LOWER(email) = ? AND pass = ? ' , $_COOKIE['app_email'] , $_COOKIE['app_pass'] );
                        header("location:index.php?action=restaurant_profile");                      
                        
                        break;
                    }
                    case "agency" : {
    
                        $db->query('UPDATE agency SET num_of_posts=num_of_posts-1 WHERE LOWER(email) = ? AND pass = ? ' , $_COOKIE['app_email'] , $_COOKIE['app_pass'] );
                        header("location:index.php?action=agency_profile");               
                        break;
                    }
                }

                

                exit;
            
                }break;


                
                case "update_post":
                    {
            
                    $existingFilePath1 = $_POST['previous_image'];
                    $existingFilePath2 = $_POST['previous_text'];

                    // Check if the uploaded file exists and is valid
                    if (isset($_FILES['updated_image']) && $_FILES['updated_image']['error'] === UPLOAD_ERR_OK) {
                    
                    $uploadedFile = $_FILES['updated_image']['tmp_name'];
                    echo $existingFilePath1;
                    echo $uploadedFile;
                    copy($uploadedFile, $existingFilePath1);

                    }
                                    
                    if($_SERVER['REQUEST_METHOD'] == "POST"){
                        $title = $_POST['title'];
                        $description = str_replace("\n", "[NEWLINE]", $_POST['description']);
                        $targetFile = $existingFilePath2;
                        $data = $title . "|" . $description . "\n";
                    
                        $directory=$targetFile;
                        file_put_contents($targetFile, $data );
                    }


                    switch ($role ){

                        case "guide" : {
        
                            header("location:index.php?action=guide_profile");
    
                            break;
                        }
                        case "hotel" : {
        
                            header("location:index.php?action=hotel_profile");                       
                             break;
                        }
                        case "resto" : {
        
                            header("location:index.php?action=restaurant_profile");                      
                            
                            break;
                        }
                        case "agency" : {
        
                            header("location:index.php?action=agency_profile");               
                            break;
                        }
                    }
    

                    exit;
                
                    }break;
                
    

    
}

?>