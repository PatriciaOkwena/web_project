
<?php
   
  $uName1 = $_POST['uName']; //the form field name is uName
  $pw1 = $_POST['pw'];       //the form field name is pw
      

//GLOBAL VARIABLES
   
     	
//Functions
 
   function checkpwOK($uName1, $pw1){
	 $myfile = fopen("unPW.txt", "r") or die("Unable to open file!");
     while(!feof($myfile)) {
           $line = explode(" ",fgets($myfile));
		   print_r ($line);
		   if (($line[0] == $uName1) && ($line[1] == $pw1)){
					echo "Welcome " . $line[2] . " " . $line[3];
					return true;
	       }
	 	}
	return false;
   }	 		   
 //main
if (!checkpwOK($uName1, $pw1))
		echo "Username or Password wrong";
 
 
?>


