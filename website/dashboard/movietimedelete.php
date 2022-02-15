<?PHP
include 'db connection.php';
$id = $_GET["id"];
$query =mysqli_query($con,"DELETE from movietime where Id='$id'");

header('location: movietime.php');
?>