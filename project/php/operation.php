<?php

require_once ("db.php");
require_once ("component.php");

$con = Createdb();

// create button click
if(isset($_POST['create'])){
    createData();
}


if(isset($_POST['update'])){
    UpdateData();
}

if(isset($_POST['delete'])){
    deleteRecord();
}

if(isset($_POST['deleteall'])){
    deleteAll();

}
if(isset($_POST['logout'])){
    echo "<script> window.location.assign('index.php'); </script>";

}

function createData(){
	$s_req= textboxValue("reg");
	$s_name= textboxValue("name");
	$s_sem= textboxValue("semester");
	$s_c= textboxValue("c_marks");
	$s_n= textboxValue("n_marks");
	$s_w= textboxValue("w_marks");
	$s_o= textboxValue("o_marks");
	$s_n_s= textboxValue("ns_marks");
	$s_d= textboxValue("d_marks");

    if($s_req && $s_name && $s_sem && $s_c && $s_n && $s_w && $s_o && $s_n_s && $s_d){

        $sql = "INSERT INTO students (Student_Reg, Student_Name, Student_Semester, Computer_Arc_AND_Org, Numerical_Computing, Web_Development , Operating_System ,	
							Network_Security , DATABASE_System ) 
                        VALUES ('$s_req','$s_name','$s_sem','$s_c','$s_n' ,'$s_w','$s_o','$s_n_s', ' $s_d')";

        if(mysqli_query($GLOBALS['con'], $sql)){
            TextNode("success", "Record Successfully Inserted...!");
        }else{
            echo "Error";
        }

    }else{
            TextNode("error", "Provide Data in the Textbox");
    }
}

function textboxValue($value){
    $textbox = mysqli_real_escape_string($GLOBALS['con'], trim($_POST[$value]));
    if(empty($textbox)){
        return false;
    }else{
        return $textbox;
    }
}


// messages
function TextNode($classname, $msg){
    $element = "<h6 class='$classname'>$msg</h6>";
    echo $element;
}


// get data from mysql database
function getData(){
    $sql = "SELECT * FROM students";

    $result = mysqli_query($GLOBALS['con'], $sql);

    if(mysqli_num_rows($result) > 0){
        return $result;
    }
}

// update dat
function UpdateData(){
	$id = textboxValue("id");
	$s_req= textboxValue("reg");
	$s_name= textboxValue("name");
	$s_sem= textboxValue("semester");
	$s_c= textboxValue("c_marks");
	$s_n= textboxValue("n_marks");
	$s_w= textboxValue("w_marks");
	$s_o= textboxValue("o_marks");
	$s_n_s= textboxValue("ns_marks");
	$s_d= textboxValue("d_marks");

    if($s_req && $s_name && $s_sem && $s_c && $s_n && $s_w && $s_o && $s_n_s && $s_d){
        $sql = "
                    UPDATE students SET 
					Student_Reg ='$s_req', Student_Name='$s_name', Student_Semester='$s_sem',Computer_Arc_AND_Org='$s_c', Numerical_Computing = '$s_n',
					Web_Development='$s_w',Operating_System='$s_o',Network_Security='$s_n_s',DATABASE_System=' $s_d' WHERE id='$id';                    
        ";

        if(mysqli_query($GLOBALS['con'], $sql)){
            TextNode("success", "Data Successfully Updated");
        }else{
            TextNode("error", "Enable to Update Data");
        }

    }else{
        TextNode("error", "Select Data Using Edit Icon");
    }


}


function deleteRecord(){
    $id = (int)textboxValue("id");

    $sql = "DELETE FROM students WHERE id=$id";

    if(mysqli_query($GLOBALS['con'], $sql)){
        TextNode("success","Record Deleted Successfully...!");
    }else{
        TextNode("error","Enable to Delete Record...!");
    }

}


function deleteBtn(){
    $result = getData();
    $i = 0;
    if($result){
        while ($row = mysqli_fetch_assoc($result)){
            $i++;
            if($i > 3){
                buttonElement("btn-deleteall", "btn btn-danger" ,"<i class='fas fa-trash'></i> Delete All", "deleteall", "");
                return;
            }
        }
    }
}


function deleteAll(){
    $sql = "DROP TABLE students";

    if(mysqli_query($GLOBALS['con'], $sql)){
        TextNode("success","All Record deleted Successfully...!");
        Createdb();
    }else{
        TextNode("error","Something Went Wrong Record cannot deleted...!");
    }
}


// set id to textbox

function setID(){
    $getid = getData();
    $id = 0;
    if($getid){
        while ($row = mysqli_fetch_assoc($getid)){
            $id = $row['id'];
        }
    }
    return ($id + 1);
}















