<?php 
/*
$Driver = "";
$url ="";
$user = "user";
$password= "";
$dbname = "5SI";


$conn = new ($Driver, $url, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO MyGuests (nomePessoa, emailPessoa, emailPessoa, idadePessoa)
VALUES ('lucas', 'henriquefagunde@gmail.com', '27')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "5SI";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

/*

$sql = "INSERT INTO Pessoa(nomePessoa, emailPessoa, idadePessoa)
VALUES ('lucas', 'henriquefagunde@gmail.com','27')";



$sql = "DELETE FROM Pessoa WHERE idPessoa=2;";
*/

/*MUDANDO O TITULO DO NOME DA PESSOA
$sql = "ALTER TABLE Pessoa CHANGE COLUMN nomePessoa ROSE varchar(80) not null";*/

$sql = "ALTER TABLE Pessoa MODIFY COLUMN nomePessoa ROSE varchar(80) not null";

$sql = "ALTER TABLE Pessoa MODIFY COLUMN nomePessoa ROSE varchar(80) not null";


if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
/*

$url = "localhost";
$user = "root";
$password = "";
$db = "5SI";

// Create connection
$conn = new mysqli($url, $user, $password, $db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO(nomePessoa, emailPessoa, emailPessoa, idadePessoa)
VALUES ('lucas', 'henriquefagunde@gmail.com', '27')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
*/

?>