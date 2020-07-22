<?php

function Createdb(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "webpro";

    // create connection
    $con = mysqli_connect($servername, $username, $password);

    // Check Connection
    if (!$con){
        die("Connection Failed : " . mysqli_connect_error());
    }

    // create Database
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

    if(mysqli_query($con, $sql)){
        $con = mysqli_connect($servername, $username, $password, $dbname);

        $sql = "
                        CREATE TABLE IF NOT EXISTS students(
                            id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                            Student_Reg VARCHAR (20) NOT NULL,
                            Student_Name VARCHAR (20) NOT NULL,
                            Student_Semester VARCHAR (2) NOT NULL,
							Computer_Arc_AND_Org INT NOT NULL,
							Numerical_Computing INT  NOT NULL,
                            Web_Development INT  NOT NULL,
                            Operating_System INT  NOT NULL,	
							Network_Security INT NOT NULL,
                            DATABASE_System INT  NOT NULL					
                        );
        ";

        if(mysqli_query($con, $sql)){
            return $con;
        }else{
            echo "Cannot Create table...!";
        }

    }else{
        echo "Error while creating database ". mysqli_error($con);
    }

}
