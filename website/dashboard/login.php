<?php
session_start();

include 'css.php';?>

<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4">
					<form class="form-vertical" method="POST" action="login.php">
						<div class="module-head">
							<h3>Sign In</h3>
						</div>
						<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="text" id="inputEmail" placeholder="Name" name="name" required>
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="password" id="inputPassword" placeholder="Password" name="password" required>
								</div>
							</div>
						</div>
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">

								

	<?php
include 'db connection.php';
if(isset($_POST['btn']))
{
    $name=$_POST['name'];
$password= $_POST['password']; 
$query = mysqli_query($con,"select * from admin_login where Name='$name'");

if (mysqli_num_rows($query)>0) {
while ($row = mysqli_fetch_assoc($query)) {
	if (password_verify($password, $row['Password'])) {
		$_SESSION['loginsuccessfull']=1;
		$_SESSION['name']= $name;
		
		header('Location: index.php');

	}
	
	}
}
else{    echo	"Please Enter Valid Name or Password";	

}






}




?>
									<button type="submit" class="btn btn-primary pull-right" name="btn">Login</button>
									
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div><!--/.wrapper-->
    <?php include 'footer.php';?>
<?php include 'script.php';?>