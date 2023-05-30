<?php 

function hotel_get_gallery ($name ){

    global $db;
    $items = $db->query('SELECT gallery_path FROM hotel WHERE name = ? ' , $name )->fetchAll();


    $directory = "hotels_galleries/".$items[0]['gallery_path']."/"; // The directory where your images are stored
    $allowedTypes = array("jpg", "jpeg", "png", "gif"); // The allowed image types
    $images = array();

    // Get all files in the directory
    $files = scandir($directory);

// Loop through each file
foreach ($files as $file) {
  // Get the file extension
  $extension = strtolower(pathinfo($directory . $file, PATHINFO_EXTENSION));
  // Check if the file is an image and is of an allowed type
  if (in_array($extension, $allowedTypes) && is_file($directory . $file)) {
    // Add the file to the images array
    $images[] = $directory . $file;
  }
}


$pfp = array_shift($images);


return array(
  "0" => $images,
  "1" => $pfp
);

}



function hotel_add_image_to_gallery (){



    global $db;
    $items = $db->query('SELECT gallery_path , num_of_posts FROM hotel WHERE LOWER(email) = ? AND pass = ? ' , $_COOKIE['app_email'] , $_COOKIE['app_pass'] )->fetchAll();

    $directory = "hotels_galleries/".$items[0]['gallery_path']."/"; // The directory where your images are stored
    $num_of_posts=intval($items[0]['num_of_posts'])+1;
    $file_count = strval($num_of_posts);
    

    // Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the file was uploaded without errors
    if (isset($_FILES["newpost"]) && $_FILES["image"]["error"] == 0) {
      // Set a destination path for the uploaded file
      $file_name = $_FILES['newpost']['name'];
      $file_extension = pathinfo($file_name, PATHINFO_EXTENSION);
      $targetDir =$directory ;
      $targetFile = $targetDir . $file_count .".".$file_extension;
      $imageFileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
  
      // Check if the file is an image
      $check = getimagesize($_FILES["newpost"]["tmp_name"]);
      if($check !== false) {
        // Move the uploaded file to the destination path
        if (move_uploaded_file($_FILES["newpost"]["tmp_name"], $targetFile)) {
          // Save the file path to your database
          //$imagePath = $targetFile;
          // Insert the image path into your database
          //$insertQuery = "INSERT INTO user_images (user_id, image_path) VALUES ('$userId', '$imagePath')";
          // Execute the query
          // ...
          // Show a success message
          $ret['error'] = "The file ". htmlspecialchars( basename( $_FILES["newpost"]["name"])). " has been uploaded." ;
        } else {
            $ret['error'] = "Sorry, there was an error uploading your file.";
        }
      } else {
        $ret['error'] = "File is not an image.";
      }
    } else {
        $ret['error'] = "Sorry, there was an error uploading your file.";
    }
  }
  


  return $targetFile ;
}


function hotel_add_info_to_gallery (){


    global $db;
    $items = $db->query('SELECT gallery_path , num_of_posts FROM hotel WHERE LOWER(email) = ? AND pass = ? ' , $_COOKIE['app_email'] , $_COOKIE['app_pass'] )->fetchAll();

    $num_of_posts=intval($items[0]['num_of_posts'])+1;
    $file_name = strval($num_of_posts);

    $directory = "hotels_galleries/".$items[0]['gallery_path']."/"; // The directory where your images are stored
 

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $title = $_POST['title'];
        $description = str_replace("\n", "[NEWLINE]", $_POST['description']);
        $targetFile = $directory . $file_name . ".txt";
        $data = $title . "|" . $description . "\n";
    
        file_put_contents($targetFile, $data, FILE_APPEND);
    }

    $info=array('title'=> $_POST['title'] , 'description'=>  $_POST['description']);

    return $info ;
}



function hotel_get_info ($name ){


    global $db;
    $items = $db->query('SELECT gallery_path FROM hotel WHERE name =  ? ' , $name  )->fetchAll();


    $directory = "hotels_galleries/".$items[0]['gallery_path']."/"; // The directory where your images are stored
    $allowedTypes = array("txt"); // The allowed image types
    $info = array();

    // Get all files in the directory
    $files = scandir($directory);

// Loop through each file
foreach ($files as $file) {
  // Get the file extension
  $extension = strtolower(pathinfo($directory . $file, PATHINFO_EXTENSION));
  // Check if the file is an image and is of an allowed type
  if (in_array($extension, $allowedTypes) && is_file($directory . $file)) {
    // Add the file to the images array
    $info[] = $directory . $file;
  }
}

return $info ;

}



function hotel_add_room (){


  global $db;
  $items = $db->query('SELECT name  FROM hotel WHERE LOWER(email) = ? AND pass = ? ' , $_COOKIE['app_email'] , $_COOKIE['app_pass'] )->fetchAll();


      $name=$items[0]['name'];
      $title = $_POST['title'];
      $description = $_POST['description'];

      $date = $_POST['date'];

      $db->query('INSERT INTO rooms (hotel , title , description,date) VALUES ( ? , ? , ? , ? ) ' , $name , $title , $description , $date ); 

  
      $info=array('title'=> $_POST['title'] , 'description'=>  $_POST['description'] , 'date'=> $_POST['date']);

    return $info ;

  
}



function hotel_add_feedback (){


  global $db;
  $items = $db->query('SELECT name FROM visitor WHERE LOWER(email) = ? AND pass = ? ' , $_COOKIE['app_email'] , $_COOKIE['app_pass'] )->fetchAll();

  
      $v_name=$items[0]['name'];
      $rating = $_POST['title'];
      $opinion = $_POST['description'];
      $stars= generateStarRating($rating);
      $name = $_POST['name'];

      $db->query('INSERT INTO feedbackshotel (visitor , rating , opinion , hotel) VALUES ( ? , ? , ? , ? ) ' , $v_name , $rating , $opinion, $name ); 

  
      $info=array('stars'=> $stars , 'description'=>  $_POST['description'],'name'=>$v_name);

    return $info ;
  
}



?>