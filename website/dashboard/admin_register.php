<?php
session_start();

  if (isset($_SESSION['loginsuccessfull'])) {}
  
  else {
	echo	"<script>alert('You are not logged In');window.location.href='login.php';</script>";

 }

 include 'css.php'; 
  include 'header.php'; 
?>



	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4">
					<form class="form-vertical" method="post" action="admin_register.php">
						<div class="module-head">
							<h3 style="text-align:center">Register a New Admin</h3>
						</div>
						<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="text" id="inputEmail" placeholder="Name" name="name" required><br>
								</div>
							</div>
                            <div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="text" id="inputEmail" placeholder="Email" name="email" required><br>
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="password" id="inputPassword" placeholder="Password" name="password" required><br>
								</div>
                                
						</div>
						<div class="module-foot">
							<div class="control-group">
<?php 
include 'db connection.php';

if (isset($_POST['btn'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password= $_POST['password'];


  $pass=password_hash($password, PASSWORD_BCRYPT);

 
  
  $query = mysqli_query($con,"insert into admin_login values('','$name','$email','$pass')");



  if ($query) {
	echo	"<script>alert('New Admin Successfully Added');window.location.href='All Admin Data.php';</script>";

  }
  else {
	  echo "Please fill the Details Properly";
  }
}
?>
								<div class="controls clearfix">
									<button type="submit" class="btn btn-primary pull-right" name="btn">Register</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div><!--/.wrapper-->
<?PHP  include 'footer.php'; ?>
