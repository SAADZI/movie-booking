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
                            <h1 style="text-align:center; margin-top: 100px; margin-bottom:30px">Theaters <a href="addtheater.php" class="btn btn-success">Add Theater</a></h1>

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
                                                 Theater Name
                                                </th>
                                                <th>
                                                 Delete Theater 
                                                </th>
                                            </tr>
                                        </thead>
                                        <?php 
include 'db connection.php';
$qu = mysqli_query($con, "SELECT * FROM theater");
while ($res =mysqli_fetch_array($qu)) {

?>
    
        <tbody>
            <tr class="odd gradeX">
                <td>
                <?php echo $res['Theater-name']?>
                </td>
      
                <td>
                <a href="theaterdelete.php?id=<?php echo $res['id']; ?>" class="btn btn-danger ">Delete </a>
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
