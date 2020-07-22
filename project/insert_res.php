<?php

require_once ("php/component.php");
require_once ("php/operation.php");
?>
<!doctype html>
<html class="no-js " lang="en"> <!--<![endif]-->
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Site Meta -->
    <title>Result Management System</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    

	<!-- Google Fonts -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i" rel="stylesheet"> 
	
    <!-- Custom & Default Styles -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="php/style.css">
	

</head>
<body>  

    <!-- LOADER -->
    <div id="preloader">
        <img class="preloader" src="images/loader.gif" alt="">
    </div><!-- end loader -->
    <!-- END LOADER -->

    <div id="wrapper">
		<div class="container text-center">
			<h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-edit"></i> Result</h1>
			<div class="d-flex justify-content-center">
			    <form action="" method="post" class="w-50">
               <div class="pt-2">
                    <?php inputElement("ID", "id",setID()); ?>
                </div>
				<div class="pt-2">
                    <?php inputElement("Student Reg", "reg",""); ?>
                </div>
                <div class="pt-2">
                    <?php inputElement("Student Name", "name",""); ?>
                </div>
				<div class="pt-2">
                    <?php inputElement("Student Semester", "semester",""); ?>
                </div>
				<div class="pt-2">
                    <?php inputElement("Computer Arc AND Org Marks", "c_marks",""); ?>
                </div>
				<div class="pt-2">
                    <?php inputElement("Numerical Computing Marks", "n_marks",""); ?>
                </div>
				<div class="pt-2">
                    <?php inputElement("Web Development Marks", "w_marks",""); ?>
                </div>
				<div class="pt-2">
                    <?php inputElement("Operating System Marks", "o_marks",""); ?>
                </div>
				<div class="pt-2">
                    <?php inputElement("Network Security Marks", "ns_marks",""); ?>
                </div>
               <div class="pt-2">
                    <?php inputElement("Database System Marks", "d_marks",""); ?>
                </div>
                <div class="d-flex justify-content-center">
                        <?php buttonElement("btn-create","btn btn-success","<i class='fas fa-plus'></i>","create","data-toggle='tooltip' data-placement='bottom' title='Create'"); ?>
                        <?php buttonElement("btn-read","btn btn-primary","<i class='fas fa-sync'></i>","read","data-toggle='tooltip' data-placement='bottom' title='Read'"); ?>
                         <?php buttonElement("btn-update","btn btn-dark border","<i class='fas fa-pen-alt'></i>","update","data-toggle='tooltip' data-placement='bottom' title='Update'"); ?>
                        <?php buttonElement("btn-delete","btn btn-warning","<i class='fas fa-trash-alt'></i>","delete","data-toggle='tooltip' data-placement='bottom' title='Delete'"); ?>
                        <?php buttonElement("btn-deleteall","btn btn-danger","<i class='fas fa-trash-alt'></i>","deleteall","data-toggle='tooltip' data-placement='bottom' title='Delete All Data'"); ?>
                        <?php buttonElement("btn-logout","btn btn-primary","<i class=''>Logout</i>","logout","data-toggle='tooltip' data-placement='bottom' title='Delete All Data'"); ?>
                        
						<?php deleteBtn();?>
                </div>
            </form>
			</div>
			 <!-- Bootstrap table  -->
        <div class="d-flex table-data ">
            <table class="table table-striped table-dark">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Student Reg</th>
                        <th>Student Name</th>
                        <th>Student Semester</th>
                        <th>Computer Arc AND Org Marks</th>
                        <th>Numerical Computing Marks</th>
                        <th>Web Development Marks</th>
                        <th>Operating System Marks</th>
                        <th>Network Security Marks</th>
                        <th>Database System Marks</th>
                    </tr>
                </thead>
                <tbody id="tbody" >
                   <?php


                   if(isset($_POST['read'])){
                       $result = getData();

                       if($result){

                           while ($row = mysqli_fetch_assoc($result)){ ?>

                               <tr>
                                   <td data-id="<?php echo $row['id']; ?>"><?php echo $row['id']; ?></td>
                                   <td data-id="<?php echo $row['id']; ?>"><?php echo $row['Student_Reg']; ?></td>   
                                   <td data-id="<?php echo $row['id']; ?>"><?php echo $row['Student_Name']; ?></td>
                                   <td data-id="<?php echo $row['id']; ?>"><?php echo $row['Student_Semester']; ?></td>
                                   <td data-id="<?php echo $row['id']; ?>"><?php echo $row['Computer_Arc_AND_Org']; ?></td>
                                   <td data-id="<?php echo $row['id']; ?>"><?php echo $row['Numerical_Computing']; ?></td>  
                                   <td data-id="<?php echo $row['id']; ?>"><?php echo $row['Web_Development']; ?></td>
                                   <td data-id="<?php echo $row['id']; ?>"><?php echo $row['Operating_System']; ?></td>
                                   <td data-id="<?php echo $row['id']; ?>"><?php echo $row['Network_Security']; ?></td>
                                   <td data-id="<?php echo $row['id']; ?>"><?php echo $row['DATABASE_System']; ?></td>
                               </tr>

                   <?php
                           }

                       }
                   }


                   ?>
                </tbody>
            </table>
        </div>
		</div>
        
	


        

    </div><!-- end wrapper -->

    <!-- jQuery Files -->
	
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/carousel.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>
    <!-- VIDEO BG PLUGINS -->
    <script src="js/videobg.js"></script>
	<script src="php/main.js"></script>
</body>
</html>