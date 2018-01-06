<?php
$user=$_POST['username'];
$pass=$_POST['password'];
if(strlen($user)==0 || strlen(pass)==0){

	header("Location:hello.php?error");
}
else{

}