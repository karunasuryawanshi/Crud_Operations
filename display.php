<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <button class="btn btn-primary my-5"><a href="index.php" class="text-light">Add User</a> </button>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <th scope="col">Date_of_hire</th>

                <th scope="col">Operations</th>
</tr>
</thead>
<tbody>

<?php

$sql="SELECT * FROM `crud`";
$result=mysqli_query($conn,$sql);

if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $contact=$row['phone'];
        $password=$row['address'];
        $password=$row['date_of_hire'];


        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$phone.'</td>
        <td>'.$address.'</td>
        <td>'.$date_of_hire.'</td>

        <td>
        <button class="btn btn-primary"><a href="update.php? updateid='.$id.'"</a></button>//not completed

        <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'"</a></button>

        </td>
        </tr>';

    }
}

?>
</tbody>
</table>
</div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>