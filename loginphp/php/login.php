<?php

if(!empty($_POST)){
	if(isset($_POST["username"]) &&isset($_POST["password"])){
		if($_POST["username"]!=""&&$_POST["password"]!=""){
			include "conexion.php";
			include "encryptor.php";

			$user_id=null;
			$query = $con->query("select * from user where (username=\"$_POST[username]\" or email=\"$_POST[username]\")");
			while($r=$query->fetch_array()){
				$salt=$r["salt"];
				break;
			}
			$hash_dec = new Decryptor("$_POST[password]",$salt);
			$hash_compare = $hash_dec->result;
			$sql1= "select * from user where (username=\"$_POST[username]\" or email=\"$_POST[username]\") and password=\"$hash_compare\" ";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$user_id=$r["id"];
				break;
			}
			if($user_id==null){
				print "<script>alert(\"Acceso invalido.\");window.location='../login.php';</script>";
			}else{
				session_start();
				$_SESSION["user_id"]=$user_id;
				print "<script>window.location='../home.php';</script>";
			}
		}
	}
}



?>
