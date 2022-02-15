<?PHP
include 'db connection.php';
$id = $_GET["id"];
$query =mysqli_query($con,"DELETE from admin_login where Id='$id'");

header('location: All Admin Data.php');
?>