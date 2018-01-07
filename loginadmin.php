<?php
class loginadmin extends PHPUnit_Framework_TestCase
{
	public function testlogin()
	{
	include "configurasi/koneksi.php";
	$username = "admin";
	$password = "admin";
	$level = "admin";
	$aktif = false;
	$query=mysql_query("select*from admin where username = '$username' and password = '$password' and level ='$level'");
	$cek = mysql_num_rows($query);
	if ($cek)$aktif=true;
	$this->assertTrue($aktif);
	}
}