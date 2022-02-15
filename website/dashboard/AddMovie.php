<?php
session_start();

  if (isset($_SESSION['loginsuccessfull'])) {}
  
  else {
    echo	"<script>alert('You are not logged In');window.location.href='login.php';</script>";

 }
include 'css.php';

include 'header.php';
include 'db connection.php'
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
                                      Add New Movie</h3>
                                </div>
                                <div class="module-body table">
                                <form method="POST" action="AddMovie.php" enctype="multipart/form-data" class="form-horizontal row-fluid"  >
										<div class="control-group">
											<label class="control-label" for="basicinput">Movie Name: </label>
											<div class="controls">
												<input type="text" id="basicinput" name="moviename"  class="span8" required>
												
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Movie Trailer: </label>
											<div class="controls">
												<input type="file" id="basicinput" name="movietrailer"  class="span8" required>
												
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Movie Title: </label>
											<div class="controls">
												<input type="file" id="basicinput" name="movietitle"  class="span8" required>
												
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Movie Time: </label>
											<div class="controls">
										<select  name="movietime">
                                        <?php
                                        $q = mysqli_query($con,"select * from movietime");
                                        while($row = mysqli_fetch_array($q))
                                        {
                                        ?>    
                                        <option value="<?php $row['Id']?>"><?php echo $row['movietiming']?></option>
                                        <?php    
                                    }?></select>		
                                    </div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Movie Description: </label>
											<div class="controls">
												<textarea style="width: 80%; height:20%" type="text" id="basicinput" name="moviedetails"  class="span8" required></textarea>
												
											</div>
										</div>
                                      
										<div class="control-group">
											<div class="controls">
<?php
if (isset($_POST['addmovie'])){
$name = $_POST['moviename'];
$trailer = $_FILES["movietrailer"]['name'];
$trailertmp = $_FILES["movietrailer"]['tmp_name'];
$title= $_FILES["movietitle"]['name'];
$titletmp = $_FILES["movietitle"]['tmp_name'];
$movietime = $_POST['movietime'];
$deciption = $_POST["moviedetails"];
move_uploaded_file($trailertmp, "movietrailer/".$trailer);
move_uploaded_file($titletmp, "movietitle/".$title);
$query = mysqli_query($con,"insert into movies values('','$name','$trailer','$title','$movietime','$description')");
if ($query)
{?>
       <div class="alert alert-success">
           <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>Nice!</strong> Movie has been Successfully Added :) 
       </div>
<?php
}
else 
{ 
?>

       <div class="alert alert-error">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>Hmm!</strong> Something Wrongs :(
       </div> 
<?php 
} 





}
?>
												<button type="submit" class="btn btn-success" name="addmovie">Add Movie</button>
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