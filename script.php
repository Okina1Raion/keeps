<?
$connection = new MongoClient();
$db = $connection->Keeps;
$collection = $db->Persons;

$user = array( 
$login = $_POST['login'],
$name = $_POST['name'],
$secondName = $_POST['secondName'],
$surname = $_POST['surname'],
$password = md5($_POST['password'])
);

$filter = array("0" => $login);

$finder = $collection -> findOne($filter);
if(empty($finder)){
$collection->insert($user);
echo "Пользователь добавлен";
}else{
	echo "Пользователь уже существует";
}


$connection->close();
?>
