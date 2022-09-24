
<?php
include 'connection.php';
$id = $_GET['id'];
$sql = "SELECT * FROM `patients` WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['Name'];
$age = $row['Age'];
$address = $row['Address'];

if(isset($_POST ['submit'])){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];

    $sql = " SELECT `patients` SET `Name` = '$name', `Age` = '$age', `Address` = '$address' WHERE `patients`.`id` = $id ";
    $result = mysqli_query($conn, $sql);
    if($result){
        header("location:view_Patients.php");
    }else{
        echo "Data not inserted";
    }


}





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/main.css">

    <title><?php echo $name;?> </title>
</head>

<body style="background-color: #152733;">
<a href="View_Patients.php" class="btn btn-danger" role="button" data-bs-toggle="button">Back</a>

<div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
<div class="card justify-content-center" style="width:29rem">
  <img src="./img/user.png" class="card-img-top" alt="...">
  <h5 class="text-center text-dark">Patient Record</h5>

  <div class="card-body">

    <h6 class="text-dark"> Name: <?php echo $name;?></h6>
    <h6 class="text-dark"> Age: <?php echo $age;?></h6>
    <h6 class="text-dark"> Address: <?php echo $address;?></h6>
    <!-- <a href="Delete_Patient.php" class="btn btn-primary">Go somewhere</a> -->
  </div>
  </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>


