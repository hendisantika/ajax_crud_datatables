<?php
define('host', 'localhost');
define('user', 'root');
define('password', '');
define('dbname', 'crud');

function bukakoneksi()
{
	mysql_select_db(dbname, mysql_connect(host, user, password));
}

function tutupkoneksi()
{
	mysql_close(mysql_connect(host, user, password));
}
?>