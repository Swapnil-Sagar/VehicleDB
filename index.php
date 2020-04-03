<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registered Vehicle Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="dbass2.css">
  </head>
  <body>

    <div class="container" align='center'>
    <h1><b>Database for Registered Vehicle</b></h1>
    <br />
    <form action="insert.php" method="POST">
      <table>
        <tr>
          <td>Name:</td>
          <td>
          <input type="text" name="name" placeholder="Enter Name of Owner" class="form-control" required></td>
        </tr>
        <tr>
          <td>Email:</td>
          <td>
          <input type="email" name="email" placeholder="Enter Email " class="form-control" required></td>
        </tr>
        <tr>
          <td>Phone number:</td>
          <td><input type="phone" name="phone" placeholder="+91xxxxxxxxxx" class="form-control" required></td>
        </tr>
        <tr>
          <td>Registration Number:</td>
          <td><input type="text" name="regNo" placeholder="Valid Registration Number" class="form-control" required></td>
        </tr>
        <tr>
          <td>Registration Date:</td>
          <td><input type="date" name="regDate" placeholder="Date of Registration" class="form-control" required></td>
        </tr>
        <tr>
          <td>Vehicle Number:</td>
          <td><input type="text" name="VehicleNo" placeholder="Enter Vehicle Number" class="form-control" required></td>
        </tr>
        <tr>
          <td>Model:</td>
          <td><input type="text" name="model" placeholder=" Enter Vehicle Model" class="form-control" required></td>
        </tr>
        <tr>
          <td>Fuel Type:</td>
          <td><input type="radio" name="fuel" value="d"required>Diesel
              <input type="radio" name="fuel" value="p"required>Petrol
            </td>
        </tr>
        <tr>
          <td>Registration Authority:</td>
          <td><input type="text" name="Authority" placeholder="District of Authority" class="form-control" required></td>
        </tr><br />

        <tr>
          <td><input type="Submit" class="insert" name="" value="Insert"></td>
          <!-- <td><button type="button" name="Update">Update</button></td> -->
          <td><a href="table.php" class="btn default">Show DataBase</a></td>
        </tr>

      </table>

    </form>

  </body>
</html>
