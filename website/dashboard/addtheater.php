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
                           
                            <div class="module">
                                <div class="module-head">
                                    <h3>
                                      Add New Theater</h3>
                                </div>
                                <div class="module-body table">
                                <form method="POST" action="addtheater.php" class="form-horizontal row-fluid"  >
										<div class="control-group">
											<label class="control-label" for="basicinput">Theater Name: </label>
											<div class="controls">
												<input type="text" id="basicinput" name="theater"  class="span8" required>
												
											</div>
										</div>

										
										<div class="control-group">
											<div class="controls">
<?php
    include 'db connection.php';
    if (isset($_POST['btn'])) {
    
        $theater = $_POST['theater'];   
    $query= mysqli_query($con,"INSERT INTO theater VALUES('','$theater')");
    
    
    if ($query)
     {?>
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Nice!</strong> New Theater has been Successfully Added :) 
            </div>
            <?php
             }
            else { ?>

            <div class="alert alert-error">
               <button type="button" class="close" data-dismiss="alert">×</button>
               <strong>Hmm!</strong> Something Wrongs :(
            </div>  <?php } 
    


}

?>
												<button type="submit" class="btn btn-success" name="btn">Enter New Theater</button>
											</div>
										</div>
									</form>
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