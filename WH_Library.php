
<?php
/*
******************************************************
* Welcome to use Weicheng Huang's universal library  *
* This library contains a lot of tricks that will    *
* 	speed up your php site development.              *
******************************************************
* The first part is server configuration             *
* ****************************************************
* Version:0.1                                        *
* Author: Weicheng Huang ----whuang23@hawk.iit.edu   *
* 									                 *
*                                                    *
* If this pages violates any of terms and agreements *
* Sorry!                                             *
* Please let me know and I will fix it ASAP!         *
******************************************************
*/

/* Conf variable*/





/* HTML display */

// add a <p> in the current position
// e.g Wh_say("Hello world!");
function Wh_say($something){
	Wh_print("p",$something);	
}

//print a tag in the current position
//eg see Wh_say() definition
function Wh_print($tag,$something){
	echo "<".$tag.">".$something."</".$tag.">";
}

//display a form in the current position
/*  
	$conf = array(
		"id"=>"example_form",
		"class"=>"example_class",
		"action"=>"example.php",
		"method"=>"POST",
		"name"=>"a Form"
	);
	
	$input_one = array(
		"label" => "Username",	
		"name" => "username",
		"type" => "input",
		"id" => "example_input"
	);
	
	$input_two = array(
		"label" => "Password",	
		"name" => "passwd",
		"type" => "password",
		"id" => "example_password"
	);
	
	$data = array(
		$input_one,$input_two
	);
	
	
	Wh_form($conf,$data);

*/

function Wh_form($conf_user,$data){
	//deal with argument
	 $conf_default = array (
			"id"=>"example_form",
			"class"=>"example_class",
			"action"=>"example.php",
			"method"=>"POST",
			"name"=>"a Form"
        );
     $conf_final = array_merge($conf_default,$conf_user); 
	if(isset($data_final))
		unset($data_final);
	$data_final = array();
	foreach($data as $row_user){
		if(isset($row_final))
			unset($row_final);
		$row_default = array (
			"id" => "example_password",
			"label" => "Password",	
			"name" => "passwd",
			"type" => "password"
        );
     	$row_final = array_merge($row_default,$row_user);
		array_push($data_final,$row_final); 				
		unset($row_final);
	}
	//start print form
	
	echo "<form ";
	foreach($conf_final as $tag => $value){
		echo $tag.="'".$value."'";	
	}
	
	foreach($data_final as $row){//not done
		foreach($row as $tag =>$value){
			
		}
		
		
	}
	
	/*
	<form name="form1" method="post" action="">
  <p>
    <label for="textfield"></label>
    <label for="textfield2"></label>
    <input type="text" name="textfield2" id="textfield2">
  </p>
  <p>
    <input type="text" name="textfield" id="textfield">
  </p>
</form>
	*/
	
	
}









?>