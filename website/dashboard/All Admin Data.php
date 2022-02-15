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
                 <?php include 'side bar.php';?>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                         
                            <!--/#btn-controls-->
                   
                            <!--/.module-->
                            <div class="module hide">
                                <div class="module-head">
                                    <h3>
                                        Adjust Budget Range</h3>
                                </div>
                                <div class="module-body">
                                    <div class="form-inline clearfix">
                                        <a href="#" class="btn pull-right">Update</a>
                                        <label for="amount">
                                            Price range:</label>
                                        &nbsp;
                                        <input type="text" id="amount" class="input-" />
                                    </div>
                                    <hr />
                                    <div class="slider-range">
                                    </div>
                                </div>
                            </div>
                            <div class="module">
                                <div class="module-head">
                                <span><h1 style="text-align:center; margin-top: 100px; margin-bottom:30px">ALL ADMIN USERS <a href="admin_register.php" class="btn btn-success">Register New Admin</a></h1>

<table class="table table-bordered table-striped" id="sorting">
    
    <form class="navbar-search pull-left input-append" method="GET" action="All Admin Data.php">
    <input type="text" name="searchbar"   class="span3">
    <?php
    include 'db connection.php';
    if (isset($_GET['search'])) {
        $searchbar =$_GET['searchbar'];
        $qu =mysqli_query($con, "SELECT * FROM admin_login WHERE Name LIKE '%{$searchbar}%'");
if ($qu) {
 echo "dafas";
} else {
    echo "Something Wrong";
}


    }
    ?>
    <input type="submit" name="search" value="Search" style="margin-left:20px; margin-bottom:10px">
					</form>
				
    <tr class="">
     
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Delete Admins</th>

    </tr>
    <?php 
include 'db connection.php';
$qu = mysqli_query($con, "SELECT * FROM admin_login");
while ($res =mysqli_fetch_array($qu)) {

?>
    <tr class="text-center">
       
        <th><?php echo $res['Name']?></th>
        <th><?php echo $res['Email']?></th>
        <th>Password Encrypted</th>
              
        <th><a href="delete.php?id=<?php echo $res['Id']; ?>" class="btn btn-danger ">Delete </a>
               </th>
<?php } ?>
    </tr>
    </table>
                                </div>
                            </div>
                            <!--/.module-->
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->







<?php include 'footer.php';?>


      