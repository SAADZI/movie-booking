<?php

if (isset($_SESSION['access_token'])) {
}

include 'css.php';
include 'header.php';
include 'nav.php';
?>
       <div class="container">
   <br />
   <h2 align="center">Account Details</h2>
   <br />
   <img style="width:80%" src="<?php echo $_SESSION['picture']?>" alt="">

   <div class="module">
                                
<table class="table table-bordered table-striped">
    
    <tbody>
        <tr>
            <td>ID</td>
            <td><?php echo $_SESSION['id']?></td>
        </tr>
        <tr>
            <td>First Name</td>
            <td><?php echo $_SESSION['given_name']?></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><?php echo $_SESSION['family_name']?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo $_SESSION['email']?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><a href="logout.php">Logout</a></td>
        </tr>
    
    </tbody>
    </table>
                                </div>
                            </div>
  </div>
<?php include 'scripts.php';
include 'footer.php';?>
