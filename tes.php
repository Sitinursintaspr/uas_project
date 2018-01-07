<<<<<<< HEAD
<?php

class tes extends PHPUnit_Framework_TestCase
{
        function testFile()
        {
                include 'configurasi/koneksi.php';
                $login = mysql_query("SELECT * FROM admin");
                $user = mysql_num_rows($login);
                $content1 = $user;
				
            
                $this->assertEquals(2, $content1);
        }

        function testcoba()
        {
                include 'configurasi/koneksi.php';
                $login = mysql_query("SELECT * FROM admin");
                $user = mysql_num_rows($login);
                $content1 = $user;
				
            
                $this->assertEquals(1, $content1);
        }
}

=======
<?php

class tes extends PHPUnit_Framework_TestCase
{
        function testFile()
        {
                include 'configurasi/koneksi.php';
                $login = mysql_query("SELECT * FROM admin");
                $user = mysql_num_rows($login);
                $content1 = $user;
				
            
                $this->assertEquals(2, $content1);
        }

        function testcoba()
        {
                include 'configurasi/koneksi.php';
                $login = mysql_query("SELECT * FROM admin");
                $user = mysql_num_rows($login);
                $content1 = $user;
				
            
                $this->assertEquals(1, $content1);
        }
}

>>>>>>> 5a9324a174ba319f172fd4f9dd7a9aa3782da0a1
?>