<?php 

function tourism_add_image_to_gallery (){

     
    global $db;
    
	$ret['status']=0;
	$ret['error']='';
	
	
	if (($_FILES['newpost']==0)){
    $ret['error']="You need to upload a photo.";
    return $ret;
  }
	if (strlen($ret['error'])==0 and strlen($_POST['city'])==0) {
        $ret['error']="You need to type in your city.";
        return $ret;
    }
    if (strlen($ret['error'])==0 and strlen($_POST['time'])==0) {
        $ret['error']="You need to type the time.";
        return $ret;
    }

    
	if (strlen($ret['error'])==0 and strlen($_POST['description'])==0) {
        $ret['error']="The description should be filled.";
        return $ret;
    }

	if (strlen($ret['error'])==0 and strlen($_POST['title'])==0) {
        $ret['error']="The title should be filled.";
        return $ret;
    }
    

    if (strlen($ret['error'])>0)return  $ret;
    $items = $db->query('SELECT Gallery_path , num_of_posts FROM tourism WHERE wilaya = ? ' , $_POST['city'])->fetchAll();
    
    $directory = "Tourism-galleries/".$items[0]['Gallery_path']."/"; // The directory where your images are stored
    $num_of_posts=intval($items[0]['num_of_posts'])+1;
    $file_count = strval($num_of_posts);
  
    
    if (empty($items)) {
        
      $gallery_path=str_replace(' ', '',$_POST['city']);
      $dir_path = 'Tourism-galleries/' . $gallery_path ;
      mkdir($dir_path, 0777, true);
      $n=0;
      $db->query("INSERT INTO tourism (Gallery_path, num_of_posts, wilaya) VALUES ('$gallery_path', $n, '{$_POST['city']}')");

      $items = $db->query('SELECT Gallery_path , num_of_posts FROM tourism WHERE wilaya = ? ' , $_POST['city'])->fetchAll();
      
      $directory = "Tourism-galleries/".$items[0]['Gallery_path']."/"; // The directory where your images are stored
      $num_of_posts=intval($items[0]['num_of_posts'])+1;
      $file_count = strval($num_of_posts);
    
  }
    
    // Check if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the file was uploaded without errors
    if (isset($_FILES["newpost"]) && $_FILES["newpost"]["error"] == 0) {
      // Set a destination path for the uploaded file
      $file_name = $_FILES['newpost']['name'];
      $file_extension = pathinfo($file_name, PATHINFO_EXTENSION);
      $targetDir =$directory ;
      $targetFile = $targetDir . $file_count .".".$file_extension;
      $imageFileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
  
      // Check if the file is an image
      $check = getimagesize($_FILES["newpost"]["tmp_name"]);
      if($check !== false) {echo"hi";
        // Move the uploaded file to the destination path
        if (move_uploaded_file($_FILES["newpost"]["tmp_name"], $targetFile)) {
          // Save the file path to your database
          //$imagePath = $targetFile;
          // Insert the image path into your database
          //$insertQuery = "INSERT INTO user_images (user_id, image_path) VALUES ('$userId', '$imagePath')";
          // Execute the query
          // ...
          // Show a success message
          $ret['error'] = "The file ". htmlspecialchars( basename( $_FILES["newphoto"]["name"])). " has been uploaded." ;
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


function tourism_add_info_to_gallery (){


    global $db;
    $items = $db->query('SELECT Gallery_path , num_of_posts FROM tourism WHERE wilaya = ? ' , $_POST['city'] )->fetchAll();
   
    $num_of_posts=intval($items[0]['num_of_posts'])+1;
    
    $file_name = strval($num_of_posts);

    $directory = "Tourism-galleries/".$items[0]['Gallery_path']."/"; // The directory where your images are stored
    

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $time=$_POST['time'];
        $title = $_POST['title'];
        $act= str_replace(",", "[NEWLINE]",$_POST['activity']);               
        $description = str_replace("\n", "[NEWLINE]", $_POST['description']);
        $targetFile = $directory . $file_name . ".txt";
        $data = $time ."|". $act . "|" . $title . "|" . $description . "\n";
       
        file_put_contents($targetFile, $data, FILE_APPEND);
    }
}
function tourism_get_gallery ($city){

    global $db;
    $items = $db->query('SELECT Gallery_path FROM tourism WHERE wilaya = ? ' , $city )->fetchAll();
    

    $directory = "Tourism-galleries/".$items[0]['Gallery_path']."/"; // The directory where your images are stored
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

function tourism_get_info ($city){

    global $db;
    $items = $db->query('SELECT Gallery_path FROM tourism WHERE wilaya = ? ' , $city )->fetchAll();


    $directory = "Tourism-galleries/".$items[0]['Gallery_path']."/"; // The directory where your images are stored
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



?>