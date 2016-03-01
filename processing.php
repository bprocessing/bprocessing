<?php


if(isset($_POST['guid'])){
	$guid = $_POST['guid'];
}else if(isset($_GET['guid'])){
	$guid = $_GET['guid'];
}else{
	die('error1');
}


$guid = stripslashes($guid);

$mysqli = new mysqli("localhost", 'processingb_usr', '9963101b2050dbf06e42','processingb');

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$q = "SELECT * FROM sketches WHERE guid like '$guid';";

if (!$result = $mysqli->query($q) ) {
    die('fuu');
}

$sketch = $result->fetch_assoc();

if(!empty($_GET['action']) && $_GET['action'] == 'get'){
	// print_r($sketch);
	// echo "FUUUUUUUUUUUUUUUUUUUCK";
	$code = urldecode($sketch['code']);
	// $code = str_replace("<xml xmlns=\"http://www.w3.org/1999/xhtml\">","",$code);
	
	// $code = str_replace("</xml>","",$code);
	echo $code;
	return;
}

if(empty($_POST['code'])){
	print_r($_POST);
	die("erro2");
}
// print_r($sketch);
// die(1);
$code = $_POST['code'];
if(empty($sketch['guid']))
{
	
	$q = "INSERT INTO sketches VALUES (default,default,'".$code."','".$guid."')";
	$mysqli->query($q );
	
}else{
	$q = "UPDATE sketches set code = '$code' WHERE guid like '$guid'";
	$mysqli->query($q );
}
// $sketch->free();
echo $q;

$mysqli->close();
/**

create table sketches(
id int(11) not null auto_increment,
timestamp timestamp,
codigoFonte longtext,
nome varchar(255),
primary key(id)
);


**/
?>