<!DOCTYPE html>
<?php 
include('db_con.php'); 
include('session_admin.php'); 
include('logout.php'); 
include('nav.php'); ?>

            <!-- /.navbar-top-links -->

        </nav>
        <!-- /.navbar-static-top -->
        <?php
$con= new mysqli("localhost","root","","amhara_hrm");
if(isset($_GET['uid']) && $_GET['action']=='del')
{
$userid=$_GET['uid'];
 //$file=$_FILES["file"]["name"];
$query=mysqli_query($con,"delete from employee_profile where id='$userid'");
//header('location:employee_info.php');
// if($query){
// 	unlink("upload/". $file);
// }
}
?>

        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
               
			    
                     <li>
					
                        <a href="index.php" class="active_nav">
						
							 <button type="button" class="btn btn-info btn-circle "><i class="fa fa-table fa-fw fa-lg"></i></i>
                            </button>
						<b>User Feedback</b> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  </a>
                    

                        <!-- /.nav-second-level -->
                    </li>
                     <li>
                         <a class="not_active"><button type="button" class="btn btn-info btn-circle " data-toggle="modal" data-target="#msg" style="color: #000; font-size: 15px">
						<i class="fa fa-table fa-fw fa-lg"></i><b> &nbsp;&nbsp;&nbsp;Manage Employee</b> </button>
					</a>
						
                        <!-- /.nav-second-level -->
                    </li>
                      <li>
                        <a class="not_active"><button type="button" class="btn btn-info btn-circle " data-toggle="modal" data-target="#msg2" style="color: #000; font-size: 15px">
						<i class="fa fa-table fa-fw fa-lg"></i><b> &nbsp;&nbsp;&nbsp;Create Role</b> </button>
						</a>
                      
                        <!-- /.nav-second-level -->
                    </li>
                   <li>

                   	 <li>
                       <a class="not_active"> <button type="button" class="btn btn-info btn-circle " data-toggle="modal" data-target="#msg3" style="color: #000; font-size: 15px">
						<i class="fa fa-table fa-fw fa-lg"></i><b>&nbsp;&nbsp;&nbsp;Assign Roles</b> </button>
						</a>
                      
                        <!-- /.nav-second-level -->
                  
				 </li>
				</li>
			
                  
			
                <!-- /#side-menu -->
            </div>
            <!-- /.sidebar-collapse -->
        </nav>
        <!-- /.navbar-static-side -->

        <div id="page-wrapper">
            
            <!-- /.row -->
	
   <div class="row-blue">
        <img src="logo2.png" height='42' width='80' style="float: left;"> <b style="color:gold; font-size:25px;"> <center> Amhara Culture and Tourism Bureau - HRM</b><img src="logo.png" height='42' width='80' style="float: right;"> </center>
    </b>

    <div class="row">
 <div class="col-lg-12">
 	
 	 
 	
                    <div class="panel panel-default" >
                     <div class="panel-heading" style="background-color:#46b8da;">
					
                     </div>
					   	
				
                          <div class="panel-body">
                            <div class="table-responsive" >
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                            <th>Date</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody >
									<?php	
		$stud=(" select * from feedback ") or die(mysql_error());
		$fetch_res = $mysqli->query($stud);
		while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
		
		{
			 
			?>
                                        <tr class="odd gradeX" >
                                            <td style="width:40px;"><?php  echo $show['id']; ?></td>
                                            <td style="width:200px;"><?php  echo $show['name']; ?></td>
                                            <td style="width:150px;"><?php  echo $show['email']; ?></td>     	
											<td style="width:200px;"><?php  echo $show['subject']; ?></td>	
											<td style="width:150px;"><?php  echo $show['message']; ?></td> 
											<td style="width:150px;"><?php  echo $show['date']; ?></td>
                     
                                  
                                        </tr>


                                     <?php } ?>
                                    </tbody>
                                </table>
                            </div>
              
                        </div>
		
                    </div>
            </div>

        </div>
        <!-- /#page-wrapper -->

    </div>
</div>

   
    <!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
 
    <!-- Page-Level Plugin Scripts - Tables -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>
   

        	

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>
<div class="modal fade" id="employee" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="width:1200px;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><center>Employee registration form</center> </h4>
      </div>
	  <form action="add_employee.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
<div class="col-lg-4">


											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">First Name:</span>
												<input type="text" name="firstName" class="form-control input-sm" >
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Middle Name:</span>
												<input type="text" name="middleName" class="form-control input-sm" />
								
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Last Name:</span>
												<input type="text" name="lastName" class="form-control input-sm" />
								
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Date of Birth:</span>
												<input type="date" name="date_of_birth"  class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Gender:</span>
												<select name="sex" class="form-control input-sm">
												<option></option>
												<option value="Male">Male</option>
												<option value="Female">Female</option>
												</select>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Natinality:</span>
												<input type="text" name="nationality" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Marital Status:</span>
												<select name="marital_status" class="form-control input-sm">
												<option></option>
												<option value="Male">Single</option>
												<option value="Female">Married</option>
												</select>
											</div>

											
											
											
											
													
									</div>


									<div class="col-lg-4">
											<div class="input-group input-sm">
											  <span class="input-group-addon input-sm">Employment Status:</span>
												 <select name="emp_status" class="form-control input-sm" id="animal" >
															<option value=""></option>
															<option value="G9">Full Time Permanent</option>
															<option value="G19">XXXX</option>
															<option value="G11">YYYYY</option>
															<option value="G12">ZZZZZ</option>
														</select>
											</div>
											<div class="input-group input-sm">
											  <span class="input-group-addon input-sm">Department:</span>
												 <select name="department" class="form-control input-sm" id="animal" >
															<option value=""></option>
															<option value="G9">Accounting</option>
															<option value="G19">ICT</option>
															<option value="G11">XXXXX</option>
															<option value="G12">ZZZZZ</option>
														</select>
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Job Title:</span>
												<input type="text" name="job_title" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
											  <span class="input-group-addon input-sm">Work Experience:</span>
											  <textarea class="form-control input-sm" rows="3" name="work_exp"></textarea>
												
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Registered Date:</span>
												<input type="date" name="registered_date"  class="form-control input-sm"  />
											</div>
                                                <div class="input-group input-sm">
											  <span class="input-group-addon input-sm">Pay Grade:</span>
												 <select name="pay_grade" class="form-control input-sm" id="animal" >
															<option value=""></option>
															<option value="G9">Executive</option>
															<option value="G19">Officer</option>
															<option value="G11">Manager</option>
															<option value="G12">ZZZZZ</option>
														</select>
											</div>
											
										
											
											</div>	
											
												
									<div class="col-lg-4">
					
										
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm"><b>City:</b></span>
												<input type="text" name="city" class="form-control input-sm" />
												</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm"><b>Country:</b> </span>
												<input type="text" name="country" class="form-control input-sm" />
											</div>
											
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm"><b>Cellphone No.:</b> </span>
												<input type="text" name="cellphone_no" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm"><b>Telephone No.:</b> </span>
												<input type="text" name="telephone_no" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm"><b> E-Mail Address:</b></span>
												<input type="text" name="email_address" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm"><b>Address:</b> </span>
												<input type="text" name="address" class="form-control input-sm" />
											</div>
										
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm"><b>Kifle Ketema:</b></span>
												<input type="text" name="kifle_ketema" class="form-control input-sm" />
											</div>
											
														
									
											
											
									</div>
									      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit"  name="submit" class="btn btn-primary" onClick="return alert('Employee Registered Successfully!')">Save</button>
      </div>
	  </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--##########################################################################################-->

<div class="modal fade" id="msg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body" style="height:100px; FONT-size:20px; overflow:hidden;"><br>
      <center><STRONG> Employee Information Has Been Managed Successfully.</STRONG></center>
      </div>
      <div class="modal-footer">
        <a href="index.php">Close </a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="msg2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body" style="height:100px; FONT-size:20px; overflow:hidden;"><br>
      <center><STRONG> Role Has Been Created Successfully.</STRONG></center>
      </div>
      <div class="modal-footer">
        <a href="index.php">Close </a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="msg3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body" style="height:100px; FONT-size:20px; overflow:hidden;"><br>
      <center><STRONG> Role Has Been Successfully Assigned.</STRONG></center>
      </div>
      <div class="modal-footer">
        <a href="index.php">Close </a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->       	


 

</body>

</html>
