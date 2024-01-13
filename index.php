<?php 
// require_once('config/db.php');
// $query = "select * from info";
// $result = mysqli_query($con,$query);


// $result = dispaly_data();

require_once 'config/db.php';
require_once 'config/functions.php';

$result = dispaly_data();


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>Fatech Data From Database in Php</title>
</head>
<body class="bg-dark">
    <div class="container">
      <div class="row mt-5">
        <div class="col">
          <div class="card mt-5">
            <div class="card-header">
              <h2 class="display-6 text-center">Cilents Details Ikontel Voice Bot</h2>
            </div>
            <div class="card-body">
              <table class="table table-bordered text-center">
                <tr class="bg-dark text-white">
                  <td> User ID </td>
                  <td> Caustomer Name </td>
                  <td> business Name </td>
                  <td> business Email </td>
                  <td> Industry </td>
                  <td> Whatsapp </td>
                  <td> IVR </td>
                </tr>
                <tr>
                <?php 

                  while($row = mysqli_fetch_assoc($result))
                  {
                ?>
                  <td><?php echo $row['id']; ?></td>
                  <td><?php echo $row['cname']; ?></td>
                  <td><?php echo $row['bname']; ?></td>
                  <td><?php echo $row['bemail']; ?></td>
                  <td><?php echo $row['industry']; ?></td>
                  <td><a href="#" class="btn btn-primary">YES/NO</a></td>  
                  <td><a href="#" class="btn btn-danger">YES/NO</a></td>  
                </tr>
                <?php    
                  }
                
                ?>
                
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>