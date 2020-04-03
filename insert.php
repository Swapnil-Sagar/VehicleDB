<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$regNo = $_POST['regNo'];
$regDate = $_POST['regDate'];
$VehicleNo = $_POST['VehicleNo'];
$model = $_POST['model'];
$fuel = $_POST['fuel'];
$Authority = $_POST['Authority'];



if(!empty($name) || !empty($email) || !empty($phone) || !empty($regNo) || !empty($regDate) || !empty($VehicleNo) || !empty($model) || !empty($fuel) || !empty($Authority)) {
  $dbhost = "localhost:3307";
  $dbUsername = "root";
  $dbPassword = "";
  $dbname = "vehiclereg";

  //create connection
  $conn = new mysqli($dbhost, $dbUsername, $dbPassword, $dbname);

  if(mysqli_connect_error()){
    die('Connection Error('.mysqli_connect_errno().')'.mysqli_connect_errno());

  } else {
    $SELECT  = "SELECT email From register Where email = ? Limit 1";
    $INSERT = "INSERT Into register (name,email,phone,regNo,regDate,VehicleNo,model,fuel,Authority) values(?,?,?,?,?,?,?,?,?)";

    //Prepare Statement
    $stmt = $conn->prepare($SELECT);
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt->bind_result($email);
    $stmt->store_result();
    $rnum = $stmt->num_rows;

    if($rnum==0) {
      $stmt->close();

      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssissssss", $name, $email,$phone,$regNo,$regDate,$VehicleNo,$model,$fuel,$Authority);
      $stmt->execute();
      echo '<script>alert(" New Record inserted successfully !")</script>';
      echo '<script>window.location.href="index.php";</script>';
  } else {
      echo '<script>alert("Email Already Registered!")</script>';
      echo '<script>window.location.href="index.php";</script>';
  }
  $stmt->close();
  $conn->close();
}
} else {
  echo "All Fields are required";
  die();
}
?>
