<?php 

function guide_get_gallery (){


    $_COOKIE['app-email']='jiji.16hamza@gmail.com';
    $_COOKIE['app-pass']='1611';

    global $db;
    $items = $db->query('SELECT gallery_path FROM guides WHERE LOWER(email) = ? AND pass = ? ' , $_COOKIE['app-email'] , $_COOKIE['app-pass'] )->fetchAll();


    $directory = "guides_galleries/".$items[0]['gallery_path']."/"; // The directory where your images are stored
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

return $images ;

}



function guide_add_image_to_gallery (){


    $_COOKIE['app-email']='jiji.16hamza@gmail.com';
    $_COOKIE['app-pass']='1611';

    global $db;
    $items = $db->query('SELECT gallery_path , num_of_posts FROM guides WHERE LOWER(email) = ? AND pass = ? ' , $_COOKIE['app-email'] , $_COOKIE['app-pass'] )->fetchAll();

    $directory = "guides_galleries/".$items[0]['gallery_path']."/"; // The directory where your images are stored
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
  


  return $ret ;
}


function guide_add_info_to_gallery (){


    $_COOKIE['app-email']='jiji.16hamza@gmail.com';
    $_COOKIE['app-pass']='1611';

    global $db;
    $items = $db->query('SELECT gallery_path , num_of_posts FROM guides WHERE LOWER(email) = ? AND pass = ? ' , $_COOKIE['app-email'] , $_COOKIE['app-pass'] )->fetchAll();

    $num_of_posts=intval($items[0]['num_of_posts'])+1;
    $file_name = strval($num_of_posts);

    $directory = "guides_galleries/".$items[0]['gallery_path']."/"; // The directory where your images are stored
 

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $title = $_POST['title'];
        $description = str_replace("\n", "[NEWLINE]", $_POST['description']);
        $targetFile = $directory . $file_name . ".txt";
        $data = $title . "|" . $description . "\n";
    
        file_put_contents($targetFile, $data, FILE_APPEND);
    }
}



function guide_get_info (){


    $_COOKIE['app-email']='jiji.16hamza@gmail.com';
    $_COOKIE['app-pass']='1611';

    global $db;
    $items = $db->query('SELECT gallery_path FROM guides WHERE LOWER(email) = ? AND pass = ? ' , $_COOKIE['app-email'] , $_COOKIE['app-pass'] )->fetchAll();


    $directory = "guides_galleries/".$items[0]['gallery_path']."/"; // The directory where your images are stored
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



function guide_add_circuit (){


  $_COOKIE['app-email']='jiji.16hamza@gmail.com';
  $_COOKIE['app-pass']='1611';

  global $db;
  $items = $db->query('SELECT g_name  FROM guides WHERE LOWER(email) = ? AND pass = ? ' , $_COOKIE['app-email'] , $_COOKIE['app-pass'] )->fetchAll();


      $name=$items[0]['g_name'];
      $title = $_POST['title'];
      $description = $_POST['description'];

      $db->query('INSERT INTO circuits (guide , title , description) VALUES ( ? , ? , ? ) ' , $name , $title , $description); 

  
  
}



function guide_add_feedback (){


  $_COOKIE['app-email']='jiji.16hamza@gmail.com';
  $_COOKIE['app-pass']='1611';
  $_COOKIE['guide-name']='hamza djamila amani';
  

  global $db;
  $items = $db->query('SELECT v_name FROM visitor WHERE LOWER(email) = ? AND pass = ? ' , $_COOKIE['app-email'] , $_COOKIE['app-pass'] )->fetchAll();


      $name=$items[0]['v_name'];
      $rating = $_POST['rating'];
      $opinion = $_POST['opinion'];

      $db->query('INSERT INTO feedbacks (visitor , rating , opinion , guide) VALUES ( ? , ? , ? , ? ) ' , $name , $rating , $opinion,$_COOKIE['guide-name'] ); 

  
  
}



?>