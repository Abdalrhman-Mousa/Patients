
<?php
include 'connection.php';

if(isset($_POST ['submit'])){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];

    $sql = "INSERT INTO `patients` (`name`, `age`, `address`) VALUES ('$name', '$age', '$address')";
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
    <link rel="stylesheet" href="./style/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Add Patients</title>
</head>

<body style="background-color: #152733;">
<a href="View_Patients.php" class="btn btn-danger" role="button" data-bs-toggle="button">Back</a>


<div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Register Patient</h3>
                        <p>Fill in the data below.</p>
                        <form method="POST">
  <div class="mb-3">
  <input type="text" name="name" class="form-control" placeholder="Name" autocomplete="off" ></div>

  <div class="mb-3">
  <input type="text" name="age" class="form-control" placeholder="Age" autocomplete="off"></div>
 

  <div class="mb-3">
  <input type="text"  name="address" class="form-control" placeholder="Address" autocomplete="off"></div>
  
  <button  type="submit" name="submit" class="btn btn-light"> Submit </button> 
</form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>