<?
$user=$_POST['name'];
if(isset($_POST['submit'])){
$hostname = "localhost"; 
$username = "root"; 
$password = ""; 
$dbName = "DB1"; 
$userstable = "123";

mysql_connect($hostname,$username,$password) OR DIE("Не могу создать соединение "); 
mysql_select_db($dbName) or die(mysql_error()); 
$query = "INSERT INTO $userstable VALUES('$name')";
mysql_query($query) or die(mysql_error());
$q2 =mysql_query("SELECT * users WHERE login='$user'");
$arr= mysql_fetch_array($q2);
  echo $arr['login']." Hi";
}
?>
