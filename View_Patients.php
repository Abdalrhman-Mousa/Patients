<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>

    <title>Patients</title>
</head>

<body style="background-color: #152733;">
<!-- <div class="container"> -->
<!-- <a href="Add_Patient.php" class="btn btn-primary my-5" role="button" data-bs-toggle="button">Add Patient</a> -->

<div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                    <a href="Add_Patient.php" class="btn btn-light float-end" role="button" data-bs-toggle="button">Add Patient</a>
                        <h3> Patients</h3>
                        <p>All Patients Data</p>
                      

<table id="example" class="table">
  
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

<?php  
$sql = "SELECT * FROM `patients`";
$result = mysqli_query($conn, $sql);
$num= mysqli_num_rows($result);
$numberpages=5;
$totalpages=ceil($num/$numberpages);
// echo $totalpages;
// for($btn=1;$btn<=$totalpages;$btn++){

// echo '<a href="View_Patients.php?page='.$btn.'" class="btn btn-light my-5 mx-1" role="button" data-bs-toggle="button">'.$btn.'</a>';

// }

if(isset($_GET['page'])){
  $page=$_GET['page'];
}else{
  $page=1;
}
$firstpage=($page-1)*$numberpages;
$sql = "SELECT * FROM `patients` LIMIT $firstpage,$numberpages";
$result = mysqli_query($conn, $sql);








if ($result){

    while($row = mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['Name'];
        $age=$row['Age'];
        $address=$row['Address'];

        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td><a href="Update_Patient.php?id='.$id.'" class="btn btn-success" role="button" data-bs-toggle="button">Edit</a>
        <a href="Delete_Patient.php?id='.$id.'" class="btn btn-danger" role="button" data-bs-toggle="button">Delete</a>
        <a href="ViewOnePatient.php?id='.$id.'" class="btn btn-warning" role="button" data-bs-toggle="button">View</a></td>

      </tr>';
}
}


?>

</tbody>
</table>
<?php
for($btn=1;$btn<=$totalpages;$btn++){

echo '<a href="View_Patients.php?page='.$btn.'" class="btn btn-light my-5 mx-1" role="button" data-bs-toggle="button">'.$btn.'</a>';

}
?>

</div>
                </div>
            </div>
        </div>
    </div>



</body>
</html>

 