<?php

switch($vars['action']){
    

    case "home":{
 
      if (!isset($_COOKIE['user'])){
         $disabledAttr='disabled';
      }else{
         $disabledAttr='';
      }

        include("view/homepage.php");
        exit;

    }break;  


    case "login":{

        include("view/login.php");
        exit;

    }break;    

    case "do_login":{

        print_r($vars);

        $ret=user_process_login($vars);
        print_r($ret); 
         if ($ret['status']==1){

            header("location: index.php?action=home"); 

         }else{
            
            header("location: index.php?action=login&error_message=".urlencode($ret['error']));
        

        }
         
         exit;        
    }break;    
    
    case "logout":{
	    setcookie("app_email", "" , -1,"/");
	    setcookie("app_pass", "", -1,"/"); 
       setcookie("user", "", -1,"/");          
	    header("location: index.php?action=login"); 
	    exit;
    }break;    


    
    case "sign_up":{

        include("view/signup.php");
        exit;

    }break; 


    case "hotel_do_register":{


        $ret=hotel_process_register($vars);
         
        if ($ret['status']==1){
           header("location: index.php?action=login"); 
        }else{
           header("location: index.php?action=sign_up&error_message=".urlencode($ret['error']));
        }
        exit;
    }break;


    case "visitor_do_register":{


        $ret=visitor_process_register($vars);
         
        if ($ret['status']==1){
           header("location: index.php?action=login"); 
        }else{
           header("location: index.php?action=sign_up&error_message=".urlencode($ret['error']));
        }
        exit;
    }break;
    

    case "restaurant_do_register":{


        $ret=resto_process_register($vars);
         
        if ($ret['status']==1){
           header("location: index.php?action=login"); 
        }else{
           header("location: index.php?action=sign_up&error_message=".urlencode($ret['error']));
        }
        exit;
    }break;

    
    
    case "agency_do_register":{


        $ret=agency_process_register($vars);
         
        if ($ret['status']==1){
           header("location: index.php?action=login"); 
        }else{
           header("location: index.php?action=sign_up&error_message=".urlencode($ret['error']));
        }
        exit;
    }break;

    case "guide_do_register":{


        $ret=guide_process_register($vars);
         
        if ($ret['status']==1){
           header("location: index.php?action=login"); 
        }else{
           header("location: index.php?action=sign_up&error_message=".urlencode($ret['error']));
        }
        exit;
    }break;



}
?>