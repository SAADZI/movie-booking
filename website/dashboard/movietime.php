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
                            <h1 style="text-align:center; margin-top: 100px; margin-bottom:30px">Al Movie Timing <a href="addmovietime.php" class="btn btn-success">Add Movie</a></h1>

                            <div class="module">

                                <div class="module-head">
                                    <h3>

                                </div>
                                <div class="module-body table">
                                    
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                                        width="100%">
                                        <thead>
                                        <tr>
                                                <th>
                                                 Movie Timing
                                                </th>
                                                <th>
                                                Delete Time
                                                </th>
                                            </tr>
                                        </thead>
                                        <?php 
include 'db connection.php';
$qu = mysqli_query($con, "SELECT * FROM movietime");
while ($res =mysqli_fetch_array($qu)) {

?>
    
        <tbody>
            <tr class="odd gradeX">
                <td>
                <?php echo $res['movietiming']?>
                </td>
      
                <td>
                <a href="movietimedelete.php?id=<?php echo $res['Id']; ?>" class="btn btn-danger ">Delete </a>
                </td>
      
            </tr>
       
              
      
               </tfoot>
               <?php } ?>
                                        
                                         
                                      
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
