<?php
    
  /**
  * 
  */
  class DB
  {
  	 private $server="localhost";
  	 private $db_name="webalnem_team";
  	 private $user="webalnem_team";
  	 private $pass="V.,s074;C@Ep"; 
  	function __construct()
  	{
           /*this->$server=$server;
           this->$db_name=$db_name;
           this->$user=$user;
           this->$pass=$pass;*/

           //connect to the database
           $link=mysql_connect($this->$server,$this->$user,$this->$pass);
           mysql_select_db($this->$db_name,$link);
  	}
	
	function getuser($email,$password)
	{
	   $req=mysql_query("select * from users where email='".$email."' and password='".$password."'");
	   $row=mysql_num_rows($req);
	   return $row;
	}
	
	
  }
?>