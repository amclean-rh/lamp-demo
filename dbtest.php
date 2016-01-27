<HTML>
<BODY>
<?
error_reporting(E_ERROR | E_PARSE);

include 'db.php';

$connection = mysql_connect($dbhost.":".$dbport, $dbuser, $dbpwd);

if (!$connection) {
	echo "Could not connect to the database";
} else {
	echo "<center><h1 style='color:blue; font-size: 6em'>SUCCESFUL connection to the DATABASE! </h1></center>";
}

?>
</BODY>
</HTML>
