<<<<<<< HEAD
<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "dbmuhdela";

mysql_connect($server,$user,$password) or die ("Koneksi gagal");
mysql_select_db($database) or die ("Database tidak ditemukan");

class testing extends PHPUnit_Framework_TestCase{
	function testPassword(){
		$sql = mysql_query("SELECT * FROM admin where username ='admin'");
		$user = mysql_fetch_array($sql);
		$test_user = $user['password'];
		$content = $test_user;
		$this->assertEquals('21232f297a57a5a743894a0e4a801fc3',$content);
	}
	
	function testUsername(){
		$sql = mysql_query("SELECT * FROM admin where password ='21232f297a57a5a743894a0e4a801fc3'");
		$user = mysql_fetch_array($sql);
		$test_user = $user['username'];
		$content = $test_user;
		$this->assertEquals('admin',$content);
	}
}
=======
<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "dbmuhdela";

mysql_connect($server,$user,$password) or die ("Koneksi gagal");
mysql_select_db($database) or die ("Database tidak ditemukan");

class testing extends PHPUnit_Framework_TestCase{
	function testPassword(){
		$sql = mysql_query("SELECT * FROM admin where username ='admin'");
		$user = mysql_fetch_array($sql);
		$test_user = $user['password'];
		$content = $test_user;
		$this->assertEquals('21232f297a57a5a743894a0e4a801fc3',$content);
	}
	
	function testUsername(){
		$sql = mysql_query("SELECT * FROM admin where password ='21232f297a57a5a743894a0e4a801fc3'");
		$user = mysql_fetch_array($sql);
		$test_user = $user['username'];
		$content = $test_user;
		$this->assertEquals('admin',$content);
	}
}
>>>>>>> 5a9324a174ba319f172fd4f9dd7a9aa3782da0a1
?>