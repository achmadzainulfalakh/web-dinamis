<?php
$email = $_POST["email"];
$password = $_POST["password"];
print "<p>Email: " . $email . "</p>";
print "<p>Password: " . $password . "</p>";

//Email admin
$adminemail="kesatrianglungupertama@gmail.com";
$adminpass="123";

//pengecekan kondisi
if($adminemail == $email and $adminpass == $password){
	//melakukan keputusan
	print "Selamat datang <b>Admin</b>.";
} else {
	print "Selamat datang " . $email;
}
