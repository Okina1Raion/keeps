<?
$connection = new MongoClient();
$db = $connection->Keeps;
$collection = $db->Persons;

$login = $_POST['login'];
$password = md5($_POST['password']);

$filter = array("0" => $login, "4"=>$password);
$vhod = $collection -> findOne($filter);

if(!empty($vhod)){
	echo "Авторизация успешна";
}else{
	echo "Вы не зарегестрированны";
}

$connection->close();
?>