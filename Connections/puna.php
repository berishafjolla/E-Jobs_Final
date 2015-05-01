
<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_job = "localhost";
$database_job = "puna";
$username_job = "root";
$password_job = "123456";
$job = mysql_pconnect($hostname_job, $username_job, $password_job) or trigger_error(mysql_error(),E_USER_ERROR); 
?>