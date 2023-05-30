<?php 



function search_for_city($city){

    global $db;

	$ret['status']=0;
	$ret['error']='';
	
	
    if (strlen($ret['error'])==0 and strlen($city)==0) {
        $ret['error']="You need to provide a city name .";
        return $ret;
    }

    if (strlen($ret['error'])>0) {return  $ret;}
    


	$ret['status']=1;
	$ret['error']='';
	return $ret;
}









?>