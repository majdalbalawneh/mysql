<?php

$sql= "SELECT* FROM api";
$result=mysqli_query($conn,$sql);
// $row=mysqli_fetch_assoc($result);
while($row = mysqli_fetch_assoc($result)){
echo $row["emp_id"]."<br>".$row["emp_name"];
}


header("Content-Type:application/json");
include('./api_conn.php');
    
    $query = "SELECT * FROM employees";
    $result = mysqli_query($conn,$query);

   while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) 
   {


$emplyeeData[] = array (

'emp_id' => $row['emp_id'],
    'emp_name' => $row['emp_name'],
    'emp_email' => $row['emp_email'],
    'emp_img' => $row['emp_img'],
    'emp_salary' => $row['emp_salary'],
    'emp_address' => $row['emp_address'],
    'emp_department' => $row['emp_department'],



);


    $response["status"] = "true";
    $response["message"] = "emplyeeData";
    $response["employees"] = $emplyeeData;


}

echo json_encode($response); exit;
?>