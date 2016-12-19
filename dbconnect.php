<?php
error_reporting( E_ALL & ~E_DEPRECATED & ~E_NOTICE );
if(!mysql_connect("localhost","karbalai_admin","123456"))
{
	die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("karbalai_tripadvisor"))
{
	die('oops database selection problem ! --> '.mysql_error());
}
?>
