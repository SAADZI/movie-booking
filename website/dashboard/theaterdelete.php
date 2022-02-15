<?PHP
include 'db connection.php';
$id = $_GET["id"];
$query =mysqli_query($con,"DELETE from theater where Id='$id'");

header('location: theaters.php');
?>