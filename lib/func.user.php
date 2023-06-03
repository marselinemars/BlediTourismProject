<?php




function user_get_logged_user(){
    global $db,$appuser;
    
    $appuser=0;
    if (isset($_COOKIE['app_email']) and strlen($_COOKIE['app_email'])>0){
		
		switch($_COOKIE['user']){

    

   
			case "visitor":{
		
				$items = $db->query("SELECT * FROM visitor WHERE LOWER(email) = ? ",$_COOKIE['app_email'])->fetchAll();
				
				}break;
	
	
				case "guide":{
		
				$items = $db->query("SELECT * FROM guides WHERE LOWER(email) = ? ",$_COOKIE['app_email'])->fetchAll();
			
			
				}break;
	
	
				case "hotel":{
		
					//search for it in the database ?
				$items = $db->query("SELECT * FROM hotel WHERE LOWER(email) = ? ",$_COOKIE['app_email'])->fetchAll();
				
				}break;
	
				
				case "resto":{
				
				$items = $db->query('SELECT * FROM resto WHERE LOWER(email) = ?' ,$_COOKIE['app_email'])->fetchAll();
	
				}break;
	
	
				case "agency":{
		
				$items = $db->query("SELECT * FROM agency WHERE LOWER(email) = ? ",$_COOKIE['app_email'])->fetchAll();
				
				}break;
	
	
	
		}


		if (count($items)>0){
			$appuser=$items[0];	
		}
	}
    return $appuser;
    
}
    
function user_process_login($vars){

    global $db;

	$ret['status']=0;
	$ret['error']='';
	
	$vars['email']=trim(strtolower($vars['email']));
	
    if (strlen($ret['error'])==0 and strlen($vars['email'])==0) {
        $ret['error']="You need to provide an email.";
        return $ret;
    }

    if (strlen($ret['error'])==0 and strlen($vars['password'])==0) {
        $ret['error']="The password should be filled.";
        return $ret;
    }

	if (strlen($ret['error'])==0 and strlen($vars['user'])==0) {
        $ret['error']="specify what you are loging in as ";
        return $ret;
    }


    if (strlen($ret['error'])>0) {return  $ret;}
    


	switch($vars['user']){

    

   
		case "visitor":{
	

				//search for it in the database ?
			$hashed_password=md5($vars['password']);	
			$items = $db->query("SELECT * FROM visitor WHERE LOWER(email) = ? ",$vars['email'])->fetchAll();
            
			if (count($items)==0){
	        $ret['error']=LANG_INCORRECT_EMAIL_PASSWORD;
	        return $ret;	}
			if(!md5($hashed_password==$$items[0]['pass']))
			{
				$ret['error']=LANG_INCORRECT_EMAIL_PASSWORD;
	        return $ret;
			}

			
			}break;


			case "guide":{
	
				$hashed_password=md5($vars['password']);
				//search for it in the database ?
			$items = $db->query("SELECT * FROM guides WHERE LOWER(email) = ? ",$vars['email'])->fetchAll();
			if (count($items)==0){
	        $ret['error']=LANG_INCORRECT_EMAIL_PASSWORD;
	        return $ret;	}
			if(!md5($hashed_password==$$items[0]['pass']))
			{
				$ret['error']=LANG_INCORRECT_EMAIL_PASSWORD;
	        return $ret;
			}


			}break;


			case "hotel":{
	
				$hashed_password=md5($vars['password']);
				//search for it in the database ?
			$items = $db->query("SELECT * FROM hotel WHERE LOWER(email) = ? ",$vars['email'])->fetchAll();
			if (count($items)==0){
	        $ret['error']=LANG_INCORRECT_EMAIL_PASSWORD;
	        return $ret;	}
			
			if(!md5($hashed_password==$$items[0]['pass']))
			{
				$ret['error']=LANG_INCORRECT_EMAIL_PASSWORD;
	        return $ret;
			}

			}break;

			
			case "resto":{
				$hashed_password=md5($vars['password']);

				//search for it in the database ?
			$items = $db->query('SELECT * FROM resto WHERE LOWER(email) = ?' , $vars['email'])->fetchAll();
			if (count($items)==0){
	        $ret['error']=LANG_INCORRECT_EMAIL_PASSWORD;
	        return $ret;	}
			if(!md5($hashed_password==$$items[0]['pass']))
			{
				$ret['error']=LANG_INCORRECT_EMAIL_PASSWORD;
	        return $ret;
			}

			}break;


			case "agency":{
	
				$hashed_password=md5($vars['password']);
				//search for it in the database ?
			$items = $db->query("SELECT * FROM agency WHERE LOWER(email) = ? ",$vars['email'])->fetchAll();
			if (count($items)==0){
	        $ret['error']=LANG_INCORRECT_EMAIL_PASSWORD;
	        return $ret;	}
			if(!md5($hashed_password==$$items[0]['pass']))
			{
				$ret['error']=LANG_INCORRECT_EMAIL_PASSWORD;
	        return $ret;
			}

			}break;



	}

	//For the sake of simplicity, log the user directly by setting their cookies..
	setcookie("app_email", $vars['email'], time()+(3600*24),"/");
	setcookie("app_pass", md5($vars['password'] ), time()+(3600*24),"/");
	setcookie("user", $vars['user'] , time()+(3600*24),"/");
	
	$ret['status']=1;
	$ret['error']='';
	return $ret;
}

function user_process_signup($vars){
	global $db;
	
	$ret['status']=0;
	$ret['error']='';
	
	$vars['email']=trim(strtolower($vars['email']));
	
    if (strlen($ret['error'])==0 and strlen($vars['email'])==0) {
        $ret['error']=LANG_YOU_NEED_TO_PROVIDE_EMAIL;
        return $ret;
    }
    if (strlen($ret['error'])==0 and strlen($vars['name'])==0) {
        $ret['error']="You need to type in your name.";
        return $ret;
    }

    if (strlen($ret['error'])==0 and strlen($vars['pass'])==0) {
        $ret['error']="The password should be filled.";
        return $ret;
    }

    if (strlen($ret['error'])>0) return  $ret;
	// Validate email and password
    if (!filter_var($vars['email'], FILTER_VALIDATE_EMAIL)) {
        $ret['error'] = 'Invalid email format';
        return $ret;
    }
    if (strlen($vars['password']) < 8 || !preg_match('/[A-Z]/', $vars['password']) || !preg_match('/[a-z]/', $vars['password']) || !preg_match('/\d/', $vars['password'])) {
        $ret['error'] = 'Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, and one digit';
        return $ret;
    }
    //search for it in the database ?
	$items = $db->query("SELECT * FROM users WHERE LOWER(email) = ?",$vars['email'])->fetchAll();
	if (count($items)>0){
	        $ret['error']="There is already an account with this email address";
	        return $ret;
	}
	//Else, there is no users in the db with the same email
	$hashed_pass=md5($vars['pass']);
    $db->query("INSERT INTO users (name, email, pass) VALUES ( ?, ?, ? )", $vars['name'], $vars['email'],$hashed_pass);
				
	//log the user directly by setting their cookies..
	setcookie("app_email", $vars['email'], time()+(3600*24),"/");
	setcookie("app_pass", $vars['pass'] , time()+(3600*24),"/");
	
	$ret['status']=1;
	$ret['error']='';
	return $ret;
}

//hotel register 
function hotel_process_register($vars){
	global $db;
	
	$ret['status']=0;
	$ret['error']='';
	
	$vars['email']=trim(strtolower($vars['email']));
	
    if (strlen($ret['error'])==0 and strlen($vars['email'])==0) {
        $ret['error']=LANG_YOU_NEED_TO_PROVIDE_EMAIL;
        return $ret;
    }
    if (strlen($ret['error'])==0 and strlen($vars['name'])==0) {
        $ret['error']="You need to type in your name.";
        return $ret;
    }

	if (strlen($ret['error'])==0 and strlen($vars['city'])==0) {
        $ret['error']="You need to type in your city.";
        return $ret;
    }

    if (strlen($ret['error'])==0 and strlen($vars['password'])==0) {
        $ret['error']="The password should be filled.";
        return $ret;
    }

	if (strlen($ret['error'])==0 and strlen($vars['address'])==0) {
        $ret['error']="The address should be filled.";
        return $ret;
    }

	if (strlen($ret['error'])==0 and strlen($vars['contact'])==0) {
        $ret['error']="The contacts should be filled.";
        return $ret;
    }

    if (strlen($ret['error'])>0)return  $ret;
    // Validate email and password
    if (!filter_var($vars['email'], FILTER_VALIDATE_EMAIL)) {
        $ret['error'] = 'Invalid email format';
        return $ret;
    }
    if (strlen($vars['password']) < 8 || !preg_match('/[A-Z]/', $vars['password']) || !preg_match('/[a-z]/', $vars['password']) || !preg_match('/\d/', $vars['password'])) {
        $ret['error'] = 'Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, and one digit';
        return $ret;
    }
    //search for it in the database ?
	$items = $db->query("SELECT * FROM hotel WHERE LOWER(email) = ?",$vars['email'])->fetchAll();
	if (count($items)>0){
	        $ret['error']="There is already an account with this email address";
	        return $ret;
	}

	$gallery_path=str_replace(' ', '',$vars['name']);
	$dir_path = 'hotels_galleries/'. $gallery_path ;
	//Else, there is no users in the db with the same email
	$hashpass=md5($vars['password']);
    $db->query("INSERT INTO hotel (name, email, pass,address,contact,gallery_path,city,num_of_posts) VALUES ( ?, ?, ? ,?,?,?,?,?)", $vars['name'], $vars['email'], $hashpass , $vars['address'],$vars['contact'],$gallery_path,$vars['city'],1);
				
	mkdir($dir_path, 0777, true);

	if (isset($_FILES["profile"]) && $_FILES["profile"]["error"] == 0) {
		// Set a destination path for the uploaded file
		$file_name = $_FILES['profile']['name'];
		$file_extension = pathinfo($file_name, PATHINFO_EXTENSION);
		$targetDir =$dir_path ;
		$targetFile = $targetDir ."/0.".$file_extension;
		$imageFileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
	
		// Check if the file is an image
		$check = getimagesize($_FILES["profile"]["tmp_name"]);
		if($check !== false) {
		  // Move the uploaded file to the destination path
		  if (move_uploaded_file($_FILES["profile"]["tmp_name"], $targetFile)) {
			// Save the file path to your database
			//$imagePath = $targetFile;
			// Insert the image path into your database
			//$insertQuery = "INSERT INTO user_images (user_id, image_path) VALUES ('$userId', '$imagePath')";
			// Execute the query
			// ...
			// Show a success message
			$ret['error'] = "The file ". htmlspecialchars( basename( $_FILES["profile"]["name"])). " has been uploaded." ;
		  } else {
			  $ret['error'] = "Sorry, there was an error uploading your file.";
		  }
		} else {
		  $ret['error'] = "File is not an image.";
		}
	  }
	
	
	$ret['status']=1;
	$ret['error']='';
	return $ret;
}



//resto register 
function resto_process_register($vars){
	global $db;
	
	$ret['status']=0;
	$ret['error']='';
	
	$vars['email']=trim(strtolower($vars['email']));
	
    if (strlen($ret['error'])==0 and strlen($vars['email'])==0) {
        $ret['error']=LANG_YOU_NEED_TO_PROVIDE_EMAIL;
        return $ret;
    }
	if (strlen($ret['error'])==0 and strlen($vars['city'])==0) {
        $ret['error']="You need to type in your city.";
        return $ret;
    }
    if (strlen($ret['error'])==0 and strlen($vars['name'])==0) {
        $ret['error']="You need to type in your name.";
        return $ret;
    }

    if (strlen($ret['error'])==0 and strlen($vars['password'])==0) {
        $ret['error']="The password should be filled.";
        return $ret;
    }

	if (strlen($ret['error'])==0 and strlen($vars['address'])==0) {
        $ret['error']="The address should be filled.";
        return $ret;
    }

	if (strlen($ret['error'])==0 and strlen($vars['contact'])==0) {
        $ret['error']="The contacts should be filled.";
        return $ret;
    }

    if (strlen($ret['error'])>0)return  $ret;
	// Validate email and password
    if (!filter_var($vars['email'], FILTER_VALIDATE_EMAIL)) {
        $ret['error'] = 'Invalid email format';
        return $ret;
    }
    if (strlen($vars['password']) < 8 || !preg_match('/[A-Z]/', $vars['password']) || !preg_match('/[a-z]/', $vars['password']) || !preg_match('/\d/', $vars['password'])) {
        $ret['error'] = 'Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, and one digit';
        return $ret;
    }

    //search for it in the database ?
	$items = $db->query("SELECT * FROM resto WHERE LOWER(email) = ?",$vars['email'])->fetchAll();
	if (count($items)>0){
	        $ret['error']="There is already an account with this email address";
	        return $ret;
	}
    $hashpass=md5($vars['password']);
	$gallery_path=str_replace(' ', '',$vars['name']);
	$dir_path = 'resto_galleries/' . $gallery_path 
	;
	//Else, there is no users in the db with the same email
    $db->query("INSERT INTO resto (name, email, pass,address,contact,gallery_path,city) VALUES ( ?, ?, ? ,?,?,?,?)", $vars['name'], $vars['email'], $hashpass , $vars['address'],$vars['contact'],$gallery_path,$vars['city']);
				
	mkdir($dir_path, 0777, true);
	
	if (isset($_FILES["profile"]) && $_FILES["profile"]["error"] == 0) {
		// Set a destination path for the uploaded file
		$file_name = $_FILES['profile']['name'];
		$file_extension = pathinfo($file_name, PATHINFO_EXTENSION);
		$targetDir =$dir_path ;
		$targetFile = $targetDir ."/0.".$file_extension;
		$imageFileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
	
		// Check if the file is an image
		$check = getimagesize($_FILES["profile"]["tmp_name"]);
		if($check !== false) {
		  // Move the uploaded file to the destination path
		  if (move_uploaded_file($_FILES["profile"]["tmp_name"], $targetFile)) {
			// Save the file path to your database
			//$imagePath = $targetFile;
			// Insert the image path into your database
			//$insertQuery = "INSERT INTO user_images (user_id, image_path) VALUES ('$userId', '$imagePath')";
			// Execute the query
			// ...
			// Show a success message
			$ret['error'] = "The file ". htmlspecialchars( basename( $_FILES["profile"]["name"])). " has been uploaded." ;
		  } else {
			  $ret['error'] = "Sorry, there was an error uploading your file.";
		  }
		} else {
		  $ret['error'] = "File is not an image.";
		}
	  }
	

	$ret['status']=1;
	$ret['error']='';
	return $ret;
}




//agency register 
function agency_process_register($vars){
	global $db;
	
	$ret['status']=0;
	$ret['error']='';
	
	$vars['email']=trim(strtolower($vars['email']));
	
    if (strlen($ret['error'])==0 and strlen($vars['email'])==0) {
        $ret['error']=LANG_YOU_NEED_TO_PROVIDE_EMAIL;
        return $ret;
    }
	if (strlen($ret['error'])==0 and strlen($vars['city'])==0) {
        $ret['error']="You need to type in your city.";
        return $ret;
    }
    if (strlen($ret['error'])==0 and strlen($vars['name'])==0) {
        $ret['error']="You need to type in your name.";
        return $ret;
    }

    if (strlen($ret['error'])==0 and strlen($vars['password'])==0) {
        $ret['error']="The password should be filled.";
        return $ret;
    }

	if (strlen($ret['error'])==0 and strlen($vars['address'])==0) {
        $ret['error']="The address should be filled.";
        return $ret;
    }

	if (strlen($ret['error'])==0 and strlen($vars['contact'])==0) {
        $ret['error']="The contacts should be filled.";
        return $ret;
    }

    if (strlen($ret['error'])>0)return  $ret;
	// Validate email and password
    if (!filter_var($vars['email'], FILTER_VALIDATE_EMAIL)) {
        $ret['error'] = 'Invalid email format';
        return $ret;
    }
    if (strlen($vars['password']) < 8 || !preg_match('/[A-Z]/', $vars['password']) || !preg_match('/[a-z]/', $vars['password']) || !preg_match('/\d/', $vars['password'])) {
        $ret['error'] = 'Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, and one digit';
        return $ret;
    }

    //search for it in the database ?
	$items = $db->query("SELECT * FROM agency  WHERE LOWER(email) = ?",$vars['email'])->fetchAll();
	if (count($items)>0){
	        $ret['error']="There is already an account with this email address";
	        return $ret;
	}

	$gallery_path=str_replace(' ', '',$vars['name']);
	$dir_path = 'agency_galleries/' . $gallery_path 
	;
	$hashpass=md5($vars['password']);
	//Else, there is no users in the db with the same email
    $db->query("INSERT INTO agency (name, email, pass,address,contact,gallery_path,city) VALUES ( ?, ?, ? ,?,?,?,?)", $vars['name'], $vars['email'], $hashpass , $vars['address'],$vars['contact'],$gallery_path,$vars['city']);
				
	mkdir($dir_path, 0777, true);
	

	if (isset($_FILES["profile"]) && $_FILES["profile"]["error"] == 0) {
		// Set a destination path for the uploaded file
		$file_name = $_FILES['profile']['name'];
		$file_extension = pathinfo($file_name, PATHINFO_EXTENSION);
		$targetDir =$dir_path ;
		$targetFile = $targetDir ."/0.".$file_extension;
		$imageFileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
	
		// Check if the file is an image
		$check = getimagesize($_FILES["profile"]["tmp_name"]);
		if($check !== false) {
		  // Move the uploaded file to the destination path
		  if (move_uploaded_file($_FILES["profile"]["tmp_name"], $targetFile)) {
			// Save the file path to your database
			//$imagePath = $targetFile;
			// Insert the image path into your database
			//$insertQuery = "INSERT INTO user_images (user_id, image_path) VALUES ('$userId', '$imagePath')";
			// Execute the query
			// ...
			// Show a success message
			$ret['error'] = "The file ". htmlspecialchars( basename( $_FILES["profile"]["name"])). " has been uploaded." ;
		  } else {
			  $ret['error'] = "Sorry, there was an error uploading your file.";
		  }
		} else {
		  $ret['error'] = "File is not an image.";
		}
	  }
	
	
	$ret['status']=1;
	$ret['error']='';
	return $ret;
}





//visitor register 
function visitor_process_register($vars){
    global $db;
    
    $ret['status'] = 0;
    $ret['error'] = '';
    
    $vars['email'] = trim(strtolower($vars['email']));
    
    if (strlen($ret['error']) == 0 && strlen($vars['email']) == 0) {
        $ret['error'] = LANG_YOU_NEED_TO_PROVIDE_EMAIL;
        return $ret;
    }
    if (strlen($ret['error']) == 0 && strlen($vars['name']) == 0) {
        $ret['error'] = "You need to type in your name.";
        return $ret;
    }
    if (strlen($ret['error']) == 0 && strlen($vars['password']) == 0) {
        $ret['error'] = "The password should be filled.";
        return $ret;
    }
    
    if (strlen($ret['error']) > 0) {
        return $ret;
    }

    // Validate email and password
    if (!filter_var($vars['email'], FILTER_VALIDATE_EMAIL)) {
        $ret['error'] = 'Invalid email format';
        return $ret;
    }
    if (strlen($vars['password']) < 8 || !preg_match('/[A-Z]/', $vars['password']) || !preg_match('/[a-z]/', $vars['password']) || !preg_match('/\d/', $vars['password'])) {
        $ret['error'] = 'Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, and one digit';
        return $ret;
    }

    // Search for the email in the database
    $items = $db->query("SELECT * FROM visitor WHERE LOWER(email) = ?", $vars['email'])->fetchAll();
    if (count($items) > 0) {
        $ret['error'] = "There is already an account with this email address";
        return $ret;
    }

    $hashpass = md5($vars['password']);
    // Insert the new visitor into the database
    $db->query("INSERT INTO visitor (name, email, pass) VALUES (?, ?, ?)", $vars['name'], $vars['email'], $hashpass);
    
    $ret['status'] = 1;
    $ret['error'] = '';
    return $ret;
}


//guide register 
function guide_process_register($vars){
	global $db;
	
	$ret['status']=0;
	$ret['error']='';
	
	$vars['email']=trim(strtolower($vars['email']));
	
    if (strlen($ret['error'])==0 and strlen($vars['email'])==0) {
        $ret['error']=LANG_YOU_NEED_TO_PROVIDE_EMAIL;
        return $ret;
    }
	if (strlen($ret['error'])==0 and strlen($vars['city'])==0) {
        $ret['error']="You need to type in your city.";
        return $ret;
    }
    if (strlen($ret['error'])==0 and strlen($vars['name'])==0) {
        $ret['error']="You need to type in your name.";
        return $ret;
    }

    if (strlen($ret['error'])==0 and strlen($vars['password'])==0) {
        $ret['error']="The password should be filled.";
        return $ret;
    }

	if (strlen($ret['error'])==0 and strlen($vars['bio'])==0) {
        $ret['error']="The bio should be filled.";
        return $ret;
    }

	if (strlen($ret['error'])==0 and strlen($vars['contact'])==0) {
        $ret['error']="The contacts should be filled.";
        return $ret;
    }

    if (strlen($ret['error'])>0)return  $ret;
	// Validate email and password
    if (!filter_var($vars['email'], FILTER_VALIDATE_EMAIL)) {
        $ret['error'] = 'Invalid email format';
        return $ret;
    }
    if (strlen($vars['password']) < 8 || !preg_match('/[A-Z]/', $vars['password']) || !preg_match('/[a-z]/', $vars['password']) || !preg_match('/\d/', $vars['password'])) {
        $ret['error'] = 'Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, and one digit';
        return $ret;
    }

    //search for it in the database ?
	$items = $db->query("SELECT * FROM guides WHERE LOWER(email) = ?",$vars['email'])->fetchAll();
	if (count($items)>0){
	        $ret['error']="There is already an account with this email address";
	        return $ret;
	}

	$gallery_path=str_replace(' ', '',$vars['name']);
	$dir_path = 'guides_galleries/' . $gallery_path 
	;
	$hashpass=md5($vars['password']);
	//Else, there is no users in the db with the same email
    $db->query("INSERT INTO guides (g_name, email, pass,g_bio,contacts,gallery_path,g_city) VALUES ( ?, ?, ? ,?,?,?,?)", $vars['name'], $vars['email'], $hashpass , $vars['bio'],$vars['contact'],$gallery_path,$vars['city']);
				
	mkdir($dir_path, 0777, true);
	
	
	if (isset($_FILES["profile"]) && $_FILES["profile"]["error"] == 0) {
		// Set a destination path for the uploaded file
		$file_name = $_FILES['profile']['name'];
		$file_extension = pathinfo($file_name, PATHINFO_EXTENSION);
		$targetDir =$dir_path ;
		$targetFile = $targetDir ."/0.".$file_extension;
		$imageFileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
	
		// Check if the file is an image
		$check = getimagesize($_FILES["profile"]["tmp_name"]);
		if($check !== false) {
		  // Move the uploaded file to the destination path
		  if (move_uploaded_file($_FILES["profile"]["tmp_name"], $targetFile)) {
			// Save the file path to your database
			//$imagePath = $targetFile;
			// Insert the image path into your database
			//$insertQuery = "INSERT INTO user_images (user_id, image_path) VALUES ('$userId', '$imagePath')";
			// Execute the query
			// ...
			// Show a success message
			$ret['error'] = "The file ". htmlspecialchars( basename( $_FILES["profile"]["name"])). " has been uploaded." ;
		  } else {
			  $ret['error'] = "Sorry, there was an error uploading your file.";
		  }
		} else {
		  $ret['error'] = "File is not an image.";
		}
	  }
	


	$ret['status']=1;
	$ret['error']='';
	return $ret;
}




?>



