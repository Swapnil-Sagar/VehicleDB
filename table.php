<!DOCTYPE html>
<html lang="en">
<head>
    <title>DATABASE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="wIdth=device-wIdth, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        #thead>tr>th{ color: white; }
    </style>
</head>
<body>
<div style="margin-top: 20px;padding-bottom: 20px;">
    <center>
        <h3>Table</h3>
    </center>
</div>
<div class="container">
    <table class="table">
        <thead Id="thead" style="box-shadow:inset 0px 1px 0px 0px #bbdaf7;
	background:linear-gradient(to bottom, #3d94f6 5%, #1e62d0 100%);
	background-color:#79bbff;
	border-radius:6px;
	border:1px solid #84bbf3;
  font-family:Arial;">
        <tr>
          <th>Id</th>
          <th>OwnerName</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Registration Number</th>
          <th>Registration Date</th>
          <th>Vehicle Number</th>
          <th>Model</th>
          <th>Fuel Type</th>
          <th>Authority</th>
          <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php
        include "config.php";
        include_once "common.php";
        $common = new common();
        $records = $common->getAllRecords($connection);
        if ($records->num_rows>0){
            $sr = 1;
            while ($record = $records->fetch_object()) {
                $Id = $record->Id;
                $name = $record->name;
                $email = $record->email;
                $phone = $record->phone;
                $regNo = $record->regNo;
                $regDate = $record->regDate;
                $VehicleNo = $record->VehicleNo;
                $model = $record->model;
                $fuel = $record->fuel;
                $Authority = $record->Authority;

                ?>
                <tr>
                    <th><?php echo $sr;?></th>
                    <th><?php echo $name;?></th>
                    <th><?php echo $email;?></th>
                    <th><?php echo $phone;?></th>
                    <th><?php echo $regNo;?></th>
                    <th><?php echo $regDate;?></th>
                    <th><?php echo $VehicleNo;?></th>
                    <th><?php echo $model;?></th>
                    <th><?php echo $fuel;?></th>
                    <th><?php echo $Authority;?></th>
                    <td><a href="#" onclick="confirmDelete('delete-script.php?Id=<?php echo $Id?>');" class="btn btn-danger btn-sm">Delete</a> </td>
                </tr>
                <?php
                $sr++;
            }
        }
        ?>
        </tbody>
    </table>
</div>
<script>
  function confirmDelete(deleteUrl) {
    if (confirm("Are you sure to delete?")) {
      window.location.href = deleteUrl;
    }
  }
</script>
</body>
</html>
