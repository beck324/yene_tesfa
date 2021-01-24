<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> HRM System </title>

    <!-- Core CSS - Include with every page -->
		    <link rel="shortcut icon" href="logo.jpg">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">


    <!-- Page-Level Plugin CSS - Tables -->
    <link href="css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom:0; background-color:#46b8da;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="employee_info.php" style="color:white;"><strong>HRM System Admin page</strong></a>
            </div>
            <!-- /.navbar-header -->

<ul class="nav navbar-top-links navbar-right" style="font-size:18px;color:#777777;color:white;">
<strong>Hi Admin</strong>
<li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                           <i class="fa fa-user fa-fw" style="color:white;"></i>   <i class="fa fa-caret-down"style="color:white;"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
					
					<?php 
					$id=$_SESSION['user_id'];
					$fetch=$mysqli->query("select * from employee_profile where id=".$id."");
					$show=$fetch->fetch_array(MYSQLI_BOTH);
					$_SESSION['id']=$show['id'];
					
					?>
                        
                       
                       
                        <li class="divider"></li>
                        <li><a href="#" data-toggle="modal" data-target="#logout">
						 <button type="button" class="btn btn-info btn-circle ">
								<i class="fa fa-sign-out fa-fw"></i></button>
						 Logout</a>
                  
         
                           
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
				

            </ul>
			